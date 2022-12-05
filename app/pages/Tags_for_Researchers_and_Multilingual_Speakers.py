import streamlit as st
import json
import requests

import streamlit as st
from wordcloud import WordCloud
import matplotlib.pyplot as plt

from sample_if10 import top_10

st.title("NLP researcher? Or just language savvy? Either way, add a little more flair to your topic tags.") # i.e., Multilingual/Research-oriented Users

# Start of 'Instructions' section #################
st.header("Instructions", anchor=None)

st.text("Copy and paste your text in the space below.")
st.text("Feel free to use as many or as few characters as you'd like.")
# End of 'Instructions' section #################

# input user text
text = st.text_area(
"Happy tagging!\n", value="",
height=None,
max_chars=None,
key=None,
help=None,
on_change=None,
args=None,
kwargs=None,
placeholder=None,
disabled=False,
label_visibility="visible")

if st.button('Submit'):
    st.spinner(text="Please wait ... Retrieving tags ...")

    # Fetch data and feed thru model
    try:

        # do something here with text
        input = {"input_text": text}
#        res = requests.post(url = "https://a13c-34-143-172-49.ngrok.io/predict",
#              data = json.dumps(input))


        # Start of 'Stats for Nerds' section
        st.header("Stats for Nerds", anchor=None)

        # Output Word Cloud visualization below

        # get sample text
        preds = top_10()

        # Output top 10 best tags
        st.text("Top 10 from prediction_hi_model_25:")
        st.text(preds[0])

        # Create and generate a word cloud image:
        hi_25 = preds[0]
        hi_25_str = ','.join(str(item) for item in hi_25)

        #wordcloud = WordCloud().generate(hi_25_str)

        #fig, ax = plt.subplots(figsize = (12, 8))
        #ax.imshow(wordcloud)
        #plt.axis("off")
        #st.pyplot(fig)

        # Output top 10 best tags
        hi_50 = preds[1]
        hi_50_str = ','.join(str(item) for item in hi_50)

        st.text("Top 10 from prediction_hi_model_50:")
        st.text(preds[1])

        #wordcloud = WordCloud().generate(hi_50_str)

        #fig, ax = plt.subplots(figsize = (12, 8))
        #ax.imshow(wordcloud)
        #plt.axis("off")
        #st.pyplot(fig)

        # Output top 10 best tags
        st.text("Top 10 from prediction_en_model_25:")
        st.text(preds[2])

        en_25 = preds[2]
        en_25_str = ','.join(str(item) for item in en_25)

        cloud = WordCloud().generate(en_25_str)

        fig, ax = plt.subplots(figsize = (12, 8))
        ax.imshow(cloud)
        plt.axis("off")
        st.pyplot(fig)

        # Output top 10 best tags
        en_50 = preds[3]
        en_50_str = ','.join(str(item) for item in en_50)

        st.text("Top 10 from prediction_en_model_50:")
        st.text(preds[3])

        cloud = WordCloud().generate(en_50_str)

        fig, ax = plt.subplots(figsize = (12, 8))
        ax.imshow(cloud)
        plt.axis("off")
        st.pyplot(fig)

        # Output request results below
        #st.subheader(input)

    except ValueError:
        st.text("Submit failed")

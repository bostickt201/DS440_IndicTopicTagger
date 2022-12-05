import streamlit as st

st.set_page_config(
	page_title = "Indic Topic Tagger",
	page_icon = "😂 "
	)

st.title("Welcome to Indic Topic Tagger!")
st.sidebar.success("Select a page above")

st.subheader("Note: Our site is still under construction. All outputs return for the model-pulled sample case below:")
st.subheader("Sample case: ਗੁਜਰਾਤ ਦੇ 50 ਮਹਿਲਾ ਮੋਟਰਸਾਈਕਲ ਸਵਾਰਾਂ ਦੇ ਗਰੁੱਪ ‘ਬਾਈਕਿੰਗ ਕਵੀਨਜ਼’ ਨੇ ਅੱਜ ਇੱਥੇ ਪ੍ਰਧਾਨ ਮੰਤਰੀ, ਸ਼੍ਰੀ ਨਰੇਂਦਰ ਮੋਦੀ ਨਾਲ ਮੁਲਾਕਾਤ ਕੀਤੀ।ਗਰੁੱਪ ਦਾ ਕਹਿਣਾ ਹੈ ਕਿ ਉਨ੍ਹਾਂ ਨੇ 13 ਰਾਜਾਂ / ਕੇਂਦਰ ਸ਼ਾਸਤ ਪ੍ਰਦੇਸ਼ਾਂ ’ਚ 10,000 ਕਿਲੋਮੀਟਰ ਦਾ ਸਫਰ ਤੈਅ ਕਰਦਿਆਂ ਰਾਹ ਵਿੱਚ ਬੇਟੀ ਬਚਾਓ, ਬੇਟੀ ਪੜ੍ਹਾਓ ਅਤੇ ਸਵੱਛ ਭਾਰਤਵਰਗੇ ਕਈ ਸਮਾਜਿਕ ਮੁੱਦਿਆਂ ’ਤੇ ਲੋਕਾਂ ਨਾਲ ਚਰਚਾ ਕੀਤੀ।ਉਨ੍ਹਾਂ ਨੇ 15 ਅਗਸਤ 2017 ਨੂੰ ਲੱਦਾਖ ਦੇ ਖਰਦੁੰਗਲਾ ਵਿੱਖੇ ਤਿਰੰਗਾ ਲਹਿਰਾਇਆ।ਪ੍ਰਧਾਨ ਮੰਤਰੀ ਨੇ ਉਨ੍ਹਾਂ ਦੇ ਯਤਨਾਂ ਦੀ ਪ੍ਰਸ਼ੰਸਾ ਕੀਤੀ ਅਤੇ ਉਨ੍ਹਾਂ ਦੇ ਚੰਗੇ ਭਵਿੱਖ ਦੀ ਕਾਮਨਾ ਕੀਤੀ।"
)

# Start of 'About' section #################
st.header("About", anchor=None)
st.text("We are a small team of Penn State students with a passion for topic modeling\nand NLP. Our online topic tagger was built")
st.text("for our DS440 capstone project, and has since evolved to be so much more.")

st.text("\n")

st.text("Please refer to the instructions below to guide you through the tagging process")
st.text("and to see how our topic model can be best fitted to your needs.")

st.text("\n")

st.text("Good luck tagging!")

st.text("\n")
st.text("\n")

st.markdown("![Alt Text](https://media.giphy.com/media/w9mHi4xjefrAwpDJAT/giphy.gif)")
# End of 'Instructions' section #################


# Start of 'Instructions' section #################
st.subheader("How to Use", anchor=None)

st.text("Are you a nonnative speaker or just looking to get a few quick tags?")
st.text("Perhaps you're an NLP researcher or student looking to get more advanced\n")
st.text("stats alongside your topic tags?")

st.text("\n")

st.text("If you answered yes to the former, our 'Tags for Nonnative Speakers' page\n")
st.text("will get you tags without any of that extra fluff.")

st.text("\n")

st.text("If you happen to be a researcher, student, or are just interested in\n")
st.text("seeing a more detailed breakdown of your handpicked topic tags, please\n")
st.text("refer to our 'Tags for Researchers and Multilingual Speakers'")

st.text("Multilingual Users and Researchers")

st.text("\n")

st.text("\n")

# End of 'Instructions' section #################

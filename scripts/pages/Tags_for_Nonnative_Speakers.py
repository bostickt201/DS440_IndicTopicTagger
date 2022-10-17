import streamlit as st

st.title("Looking for topic tags and nothing more? You've come to the right place.") # i.e., Nonnative Users
#st.write("You have entered", st.session_state["my_input"])

# Start of 'Instructions' section #################
st.header("Instructions", anchor=None)

st.text("Fill in 'Instructions' section here!!!")
# End of 'Instructions' section #################

# input user text
st.text_area(
"Paste your text below:", value="",
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
    st.write('Please wait...processing text... finding optimal tags...')

    # Fetch data and feed thru model

    # Output results below

# Top 5 button
if st.button('Retrieve Top 5 Best Tags'):
    st.write('Retrieving top 5 best tags...')

    # Fetch top 5 best tags

    # Output top 5 best tags below

# Top 10 button
if st.button('Retrieve Top 10 Best Tags'):
    st.write('Retrieivng top 10 best tags...')

    # Fetch top 10 best tags

    # Output top 10 best tags below

#!/usr/bin/python

# This program obtains two names from the user and prints a pair of initials.

# Obtain the two names from the user

'Creating Variables in Python'

firstName = input('Enter your First name : ')
lastName = input('Enter your Last name : ')

# Compute and display the initials
initials = firstName[0] + "&" + lastName[0]

print(initials)

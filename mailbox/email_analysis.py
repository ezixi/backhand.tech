#!/usr/bin/python
import mailbox
import logging

logging.basicConfig(filename='email_analysis.log', level=logging.DEBUG)
src_mbox = mailbox.mbox('data/Starred.mbox')


def main():
    for msg in src_mbox:
        print msg['subject']


if __name__ == "__main__":
    main()

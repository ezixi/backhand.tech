#!/usr/bin/python
import mailbox
import logging

logging.basicConfig(filename='email_analysis.log', level=logging.DEBUG)


def parse_mbox(filepath):
    src_mbox = mailbox.mbox(filepath)
    for msg in src_mbox:
        write_to_csv(email_data)
    return


def main():
    email_data = parse_mbox('data/Archived.mbox')

    return

if __name__ == "__main__":
    main()

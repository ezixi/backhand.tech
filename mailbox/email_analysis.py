#!/usr/bin/python
import mailbox

src_mbox = mailbox.Maildir('data/backhandstories.mbox')

for msg in src_mbox:
    print msg
# phpBoard

---

This is a simple web dashboard written in PHP.

First, change the value of `$rootdir` in `config.php` to set it up.

Visit `list.php` or `index.php` to get a list of currently available messages.

To set the initial password, use this command:

```
echo -n 'password' | md5sum | awk '{print $1}' > password.key
```

To change the password, visit `chpw.php`.

To add or modify a message, visit `submit.php`. Enter the message name and the content, as well as the password, and hit `Submit`.

To delete a message, specify its name in the name box, starting with a hyphen `-`. After submitting, the message will be removed.

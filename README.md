# Custom UI behaviour based on user profile fields #

The plugin is looking for custom user profile fields that starts with 'cpf' prefix to their name,
and adds them as a class to the body of each page. Also, it has a system config setting that allow
the administrator to add custom css, related to those class.
For example, the combination of both, help us to enlarge the content area text of a page when a user with special needs
has enabled his/her custom profile field "cpfvisual" that indicate she/he needs a special UI customization.

# Installation

* Download the zip file or get it via git.
* Copy the moodle-local_customprofilebehaviour directory to the local directory of your Moodle instance.
* Change its name to "customprofilebehaviour"
* Visit the notifications page.

# Setup
* Add at least one "checkbox" type custom profile field, that starts with "cpf".
* Go to any user profile and enable the above custom field.
* Add some custom CSS on the https://your-moodle/admin/settings.php?section=local_customprofilebehaviour
  (Site administration > Appearance > Custom UI behaviour based on user profile fields)

## License ##

2017 Nadav Kavalerchik

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <http://www.gnu.org/licenses/>.

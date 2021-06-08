CREATE TABLE contacts (
  id INTEGER PRIMARY KEY ASC AUTOINCREMENT,
  bcode TEXT NOT NULL,
  name TEXT NULL,
  email TEXT NULL,
  phone TEXT NULL,
  function TEXT NULL,
  notes TEXT NULL,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMPP
);

CREATE INDEX contacts_idx ON contacts(name);

CREATE TABLE branches (
  id INTEGER PRIMARY KEY ASC AUTOINCREMENT,
  bcode TEXT NOT NULL,
  branch TEXT NOT NULL
);

CREATE INDEX branches_idx ON branches(branch);

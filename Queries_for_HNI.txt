--  Create DB
Create  DB DBS;
use DBS;

-- Create table

Create table HNI_Data(
    ID int not null,
    HNI_name varchar(225),
    Aptmnt_Date date),
    Schedule_In time,
    Duration int);

-- Insert values

Insert into HNI_Data values(<insert variables from php code here>);

-- Selecting from a particular date


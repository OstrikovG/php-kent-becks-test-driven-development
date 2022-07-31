# php-kent-becks-test-driven-development


## Description
A Docker-based introduction with PHP examples for Kent Beck's book 'Test Driven Development: By Example'


## Wikipedia
* https://en.wikipedia.org/wiki/Test-driven_development


## Buy Kent Beck's book 'Test Driven Development: By Example'
* [Amazon](https://www.amazon.com/Test-Driven-Development-Kent-Beck/dp/0321146530/?_encoding=UTF8&pd_rd_w=XiJ2V&content-id=amzn1.sym.91202c6f-1c11-4e3d-b51a-3af958cedd30&pf_rd_p=91202c6f-1c11-4e3d-b51a-3af958cedd30&pf_rd_r=SJ89G6R8MHVX1XQ32W3A&pd_rd_wg=O3RQe&pd_rd_r=f7895567-4648-446c-9161-5d669fbf16bd&ref_=aufs_ap_sc_dsk)


## Installation
We are using GNU Make for work with CLI while developing. You can see list of all available command using `make` command in project root directory.


1. Clone repository

    ```bash
    $ git clone https://github.com/OstrikovG/php-kent-becks-test-driven-development
    ```

2. Install application

    ```bash
    $ cd php-kent-becks-test-driven-development
    $ make install
    ```


## Usage

1. Read the book


2. Make `git checkout` to tag according your chapter

    ```bash
    $ git checkout 'Chapter_1_Multi_Currency_Money'
    ```


3. View report according to your current branch [REPORT](REPORT.md)


4. Run unit test
    ```bash
    $ make unit
    ```
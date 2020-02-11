def print_paponacci_numbers():
    """
    Void function to print out all paponacci numbers.
    :return:
    """
    chars = set('045689')
    for x in range(0, 2138):
        if not any((c in chars)for c in str(x)):
            print("Found yellow number! {}".format(x))


def get_paponacci_numbers_list():
    """
    Function to get paponacci iterable list.
    :return: Iterable list of paponacci numbers
    """
    return [i for i in range(2137+1) if all([c in ["2", "1", "3", "7"] for c in str(i)])]


if __name__ == '__main__':
    print_paponacci_numbers()
    print(get_paponacci_numbers_list())

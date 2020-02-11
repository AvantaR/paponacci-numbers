def paponacci_numbers():
    chars = set('045689')
    for x in range(0, 2138):
        if not any((c in chars)for c in str(x)):
            print("Found yellow number! {}".format(x))


if __name__ == '__main__':
    paponacci_numbers()

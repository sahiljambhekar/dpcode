"""
is_rotation checks if s2 is a rotatation of s1 using only one substring compare (python in operator)
>>> is_rotation("abc", "abc")
True
>>> is_rotation("aaa", "aa")
False
>>> is_rotation(u"abc", u"bca")
True
>>> is_rotation('waterbottle', 'erbottlewat')
True
>>> is_rotation('waterbottle', 'rbottlewat')
False
>>> is_rotation('waterbottle', 'Erbottlewat')
False
"""


if __name__ == '__main__':
	import doctest
	if doctest.testmod().failed > 0:
		import sys
		sys.exit(1)

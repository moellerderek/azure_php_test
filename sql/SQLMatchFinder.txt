SELECT * FROM charts WHERE
(
        ( 
                self BETWEEN 185 AND 205
                OR
                self BETWEEN 125 AND 145
                OR
                self BETWEEN 245 AND 265
                OR
                self BETWEEN 65 AND 85
                OR
                self BETWEEN 305 AND 325
        )
        AND
        (
                feel BETWEEN 79 AND 99
                OR
                feel BETWEEN 19 AND 39
                OR
                feel BETWEEN 139 AND 159
                OR
                feel BETWEEN 319 AND 339
                OR
                feel BETWEEN 199 AND 219
        )
        AND
        (
                talk BETWEEN 172 AND 192
                OR
                talk BETWEEN 112 AND 132
                OR
                talk BETWEEN 232 AND 252
                OR
                talk BETWEEN 52 AND 72
                or
                talk BETWEEN 292 AND 302
        )
        AND
        (
                like BETWEEN 178 AND 198
                OR
                like BETWEEN 118 AND 138
                OR
                like BETWEEN 238 AND 258
                OR
                like BETWEEN 58 AND 78
                OR
                like BETWEEN 298 AND 318
        )
        AND
        (
                does BETWEEN 243 AND 263
                OR
                does BETWEEN 183 AND 203
                OR
                does BETWEEN 303 AND 323
                OR
                does BETWEEN 123 AND 143
                OR
                does BETWEEN 3 AND 23
        )
        AND
                DATE BETWEEN 19700101 AND 19901231
);
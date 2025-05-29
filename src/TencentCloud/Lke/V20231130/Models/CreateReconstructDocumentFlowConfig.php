<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information for creating a smart document parsing task.
 *
 * @method string getTableResultType() Obtain The returned form of a table in a markdown file: 
0: the table is returned in MD format;
1: the table is returned in HTML form.
The default is 1.
 * @method void setTableResultType(string $TableResultType) Set The returned form of a table in a markdown file: 
0: the table is returned in MD format;
1: the table is returned in HTML form.
The default is 1.
 * @method string getResultType() Obtain The format of smart document parsing results:
0: only return full-text MD;
1: only return OCR original JSON of each page;.
2: only return MD of each page;
3: return full-text MD + OCR original JSON of each page;.
4: return full-text MD + MD of each page.
The default value is 3 (return full-text MD + OCR original JSON of each page).

 * @method void setResultType(string $ResultType) Set The format of smart document parsing results:
0: only return full-text MD;
1: only return OCR original JSON of each page;.
2: only return MD of each page;
3: return full-text MD + OCR original JSON of each page;.
4: return full-text MD + MD of each page.
The default value is 3 (return full-text MD + OCR original JSON of each page).
 */
class CreateReconstructDocumentFlowConfig extends AbstractModel
{
    /**
     * @var string The returned form of a table in a markdown file: 
0: the table is returned in MD format;
1: the table is returned in HTML form.
The default is 1.
     */
    public $TableResultType;

    /**
     * @var string The format of smart document parsing results:
0: only return full-text MD;
1: only return OCR original JSON of each page;.
2: only return MD of each page;
3: return full-text MD + OCR original JSON of each page;.
4: return full-text MD + MD of each page.
The default value is 3 (return full-text MD + OCR original JSON of each page).

     */
    public $ResultType;

    /**
     * @param string $TableResultType The returned form of a table in a markdown file: 
0: the table is returned in MD format;
1: the table is returned in HTML form.
The default is 1.
     * @param string $ResultType The format of smart document parsing results:
0: only return full-text MD;
1: only return OCR original JSON of each page;.
2: only return MD of each page;
3: return full-text MD + OCR original JSON of each page;.
4: return full-text MD + MD of each page.
The default value is 3 (return full-text MD + OCR original JSON of each page).
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TableResultType",$param) and $param["TableResultType"] !== null) {
            $this->TableResultType = $param["TableResultType"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }
    }
}

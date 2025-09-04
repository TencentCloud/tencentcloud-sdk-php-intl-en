<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information for creating intelligent document parsing tasks.
 *
 * @method string getTableResultType() Obtain The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
 * @method void setTableResultType(string $TableResultType) Set The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
 * @method string getResultType() Obtain The format of the returned results of intelligent document parsing.
- 0: only returns full-text MD.
- 1: only returns the OCR original Json for each page.
- 2: only returns the MD of each page.
- 3: returns the full-text MD and the original OCR Json of each page.
- 4: returns full-text MD and MD of each page.
The default value is 3 (returns the full-text MD and the original OCR Json of each page).
 * @method void setResultType(string $ResultType) Set The format of the returned results of intelligent document parsing.
- 0: only returns full-text MD.
- 1: only returns the OCR original Json for each page.
- 2: only returns the MD of each page.
- 3: returns the full-text MD and the original OCR Json of each page.
- 4: returns full-text MD and MD of each page.
The default value is 3 (returns the full-text MD and the original OCR Json of each page).
 */
class CreateReconstructDocumentFlowConfig extends AbstractModel
{
    /**
     * @var string The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
     */
    public $TableResultType;

    /**
     * @var string The format of the returned results of intelligent document parsing.
- 0: only returns full-text MD.
- 1: only returns the OCR original Json for each page.
- 2: only returns the MD of each page.
- 3: returns the full-text MD and the original OCR Json of each page.
- 4: returns full-text MD and MD of each page.
The default value is 3 (returns the full-text MD and the original OCR Json of each page).
     */
    public $ResultType;

    /**
     * @param string $TableResultType The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
     * @param string $ResultType The format of the returned results of intelligent document parsing.
- 0: only returns full-text MD.
- 1: only returns the OCR original Json for each page.
- 2: only returns the MD of each page.
- 3: returns the full-text MD and the original OCR Json of each page.
- 4: returns full-text MD and MD of each page.
The default value is 3 (returns the full-text MD and the original OCR Json of each page).
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

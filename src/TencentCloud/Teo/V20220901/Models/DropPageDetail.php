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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration details of the block page
 *
 * @method integer getPageId() Obtain The ID of the block page, which can be obtained from the CreateSecurityDropPage API.
If 0 is passed, the default block page will be used.
 * @method void setPageId(integer $PageId) Set The ID of the block page, which can be obtained from the CreateSecurityDropPage API.
If 0 is passed, the default block page will be used.
 * @method integer getStatusCode() Obtain The HTTP status code of the block page. Value range: 100-600.
 * @method void setStatusCode(integer $StatusCode) Set The HTTP status code of the block page. Value range: 100-600.
 * @method string getName() Obtain The block page file or URL.
 * @method void setName(string $Name) Set The block page file or URL.
 * @method string getType() Obtain Type of the block page. Values:
<li>`file`: Block page file</li>
<li>`url`: Block page URL</li>
 * @method void setType(string $Type) Set Type of the block page. Values:
<li>`file`: Block page file</li>
<li>`url`: Block page URL</li>
 */
class DropPageDetail extends AbstractModel
{
    /**
     * @var integer The ID of the block page, which can be obtained from the CreateSecurityDropPage API.
If 0 is passed, the default block page will be used.
     */
    public $PageId;

    /**
     * @var integer The HTTP status code of the block page. Value range: 100-600.
     */
    public $StatusCode;

    /**
     * @var string The block page file or URL.
     */
    public $Name;

    /**
     * @var string Type of the block page. Values:
<li>`file`: Block page file</li>
<li>`url`: Block page URL</li>
     */
    public $Type;

    /**
     * @param integer $PageId The ID of the block page, which can be obtained from the CreateSecurityDropPage API.
If 0 is passed, the default block page will be used.
     * @param integer $StatusCode The HTTP status code of the block page. Value range: 100-600.
     * @param string $Name The block page file or URL.
     * @param string $Type Type of the block page. Values:
<li>`file`: Block page file</li>
<li>`url`: Block page URL</li>
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

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
 * @method integer getPageId() Obtain The ID of the block page. Specify `0` to use the default block page. 
(Disused) If 0 is passed, the default block page will be used.
 * @method void setPageId(integer $PageId) Set The ID of the block page. Specify `0` to use the default block page. 
(Disused) If 0 is passed, the default block page will be used.
 * @method integer getStatusCode() Obtain The HTTP status code to trigger the block page. Range: 100-600, excluding 3xx codes. Code 566: Requests blocked by managed rules. Code 567: Requests blocked by web security rules (except managed rules).
 * @method void setStatusCode(integer $StatusCode) Set The HTTP status code to trigger the block page. Range: 100-600, excluding 3xx codes. Code 566: Requests blocked by managed rules. Code 567: Requests blocked by web security rules (except managed rules).
 * @method string getName() Obtain The block page file or URL.
 * @method void setName(string $Name) Set The block page file or URL.
 * @method string getType() Obtain Type of the block page. Values:
<li>`page`: Return the specified page.</li>

 * @method void setType(string $Type) Set Type of the block page. Values:
<li>`page`: Return the specified page.</li>

 * @method string getCustomResponseId() Obtain ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Type=page`.
 * @method void setCustomResponseId(string $CustomResponseId) Set ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Type=page`.
 */
class DropPageDetail extends AbstractModel
{
    /**
     * @var integer The ID of the block page. Specify `0` to use the default block page. 
(Disused) If 0 is passed, the default block page will be used.
     */
    public $PageId;

    /**
     * @var integer The HTTP status code to trigger the block page. Range: 100-600, excluding 3xx codes. Code 566: Requests blocked by managed rules. Code 567: Requests blocked by web security rules (except managed rules).
     */
    public $StatusCode;

    /**
     * @var string The block page file or URL.
     */
    public $Name;

    /**
     * @var string Type of the block page. Values:
<li>`page`: Return the specified page.</li>

     */
    public $Type;

    /**
     * @var string ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Type=page`.
     */
    public $CustomResponseId;

    /**
     * @param integer $PageId The ID of the block page. Specify `0` to use the default block page. 
(Disused) If 0 is passed, the default block page will be used.
     * @param integer $StatusCode The HTTP status code to trigger the block page. Range: 100-600, excluding 3xx codes. Code 566: Requests blocked by managed rules. Code 567: Requests blocked by web security rules (except managed rules).
     * @param string $Name The block page file or URL.
     * @param string $Type Type of the block page. Values:
<li>`page`: Return the specified page.</li>

     * @param string $CustomResponseId ID of custom response. The ID can be obtained via the `DescribeCustomErrorPages` API. It's required when `Type=page`.
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

        if (array_key_exists("CustomResponseId",$param) and $param["CustomResponseId"] !== null) {
            $this->CustomResponseId = $param["CustomResponseId"];
        }
    }
}

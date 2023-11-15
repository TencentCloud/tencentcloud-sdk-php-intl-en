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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSearchBugInfo response structure.
 *
 * @method DataSearchBug getData() Obtain Vulnerability and asset information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(DataSearchBug $Data) Set Vulnerability and asset information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getReturnCode() Obtain Status code. Valid values: 0: successful; others: failed.
 * @method void setReturnCode(integer $ReturnCode) Set Status code. Valid values: 0: successful; others: failed.
 * @method string getReturnMsg() Obtain Status message. Valid values: success: successful query; fail: failed query.
 * @method void setReturnMsg(string $ReturnMsg) Set Status message. Valid values: success: successful query; fail: failed query.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSearchBugInfoResponse extends AbstractModel
{
    /**
     * @var DataSearchBug Vulnerability and asset information
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Status code. Valid values: 0: successful; others: failed.
     */
    public $ReturnCode;

    /**
     * @var string Status message. Valid values: success: successful query; fail: failed query.
     */
    public $ReturnMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param DataSearchBug $Data Vulnerability and asset information
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ReturnCode Status code. Valid values: 0: successful; others: failed.
     * @param string $ReturnMsg Status message. Valid values: success: successful query; fail: failed query.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new DataSearchBug();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

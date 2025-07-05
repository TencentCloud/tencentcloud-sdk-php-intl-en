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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGroupNew response structure.
 *
 * @method string getData() Obtain Returns a tree structure
 * @method void setData(string $Data) Set Returns a tree structure
 * @method integer getUnResourceNum() Obtain Number of uncategorizd instances
 * @method void setUnResourceNum(integer $UnResourceNum) Set Number of uncategorizd instances
 * @method string getReturnMsg() Obtain Response message
 * @method void setReturnMsg(string $ReturnMsg) Set Response message
 * @method integer getReturnCode() Obtain Return code. 0: Request successful
 * @method void setReturnCode(integer $ReturnCode) Set Return code. 0: Request successful
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeResourceGroupNewResponse extends AbstractModel
{
    /**
     * @var string Returns a tree structure
     */
    public $Data;

    /**
     * @var integer Number of uncategorizd instances
     */
    public $UnResourceNum;

    /**
     * @var string Response message
     */
    public $ReturnMsg;

    /**
     * @var integer Return code. 0: Request successful
     */
    public $ReturnCode;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Data Returns a tree structure
     * @param integer $UnResourceNum Number of uncategorizd instances
     * @param string $ReturnMsg Response message
     * @param integer $ReturnCode Return code. 0: Request successful
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
            $this->Data = $param["Data"];
        }

        if (array_key_exists("UnResourceNum",$param) and $param["UnResourceNum"] !== null) {
            $this->UnResourceNum = $param["UnResourceNum"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

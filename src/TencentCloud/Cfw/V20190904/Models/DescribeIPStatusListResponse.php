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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPStatusList response structure.
 *
 * @method array getStatusList() Obtain IP status information
 * @method void setStatusList(array $StatusList) Set IP status information
 * @method integer getReturnCode() Obtain Status code
 * @method void setReturnCode(integer $ReturnCode) Set Status code
 * @method string getReturnMsg() Obtain Status information
 * @method void setReturnMsg(string $ReturnMsg) Set Status information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeIPStatusListResponse extends AbstractModel
{
    /**
     * @var array IP status information
     */
    public $StatusList;

    /**
     * @var integer Status code
     */
    public $ReturnCode;

    /**
     * @var string Status information
     */
    public $ReturnMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $StatusList IP status information
     * @param integer $ReturnCode Status code
     * @param string $ReturnMsg Status information
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
        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = [];
            foreach ($param["StatusList"] as $key => $value){
                $obj = new IPDefendStatus();
                $obj->deserialize($value);
                array_push($this->StatusList, $obj);
            }
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

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
 * DescribeUnHandleEventTabList response structure.
 *
 * @method UnHandleEvent getData() Obtain Gets unhandled security events
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setData(UnHandleEvent $Data) Set Gets unhandled security events
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getReturnCode() Obtain Error code. 0: success; non-0: error
 * @method void setReturnCode(integer $ReturnCode) Set Error code. 0: success; non-0: error
 * @method string getReturnMsg() Obtain Return message: success
 * @method void setReturnMsg(string $ReturnMsg) Set Return message: success
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUnHandleEventTabListResponse extends AbstractModel
{
    /**
     * @var UnHandleEvent Gets unhandled security events
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Data;

    /**
     * @var integer Error code. 0: success; non-0: error
     */
    public $ReturnCode;

    /**
     * @var string Return message: success
     */
    public $ReturnMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param UnHandleEvent $Data Gets unhandled security events
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ReturnCode Error code. 0: success; non-0: error
     * @param string $ReturnMsg Return message: success
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
            $this->Data = new UnHandleEvent();
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

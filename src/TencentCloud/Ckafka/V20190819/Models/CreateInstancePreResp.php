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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure returned by monthly subscribed instance APIs
 *
 * @method string getReturnCode() Obtain Returned code. 0: Normal; other values: Error.
 * @method void setReturnCode(string $ReturnCode) Set Returned code. 0: Normal; other values: Error.
 * @method string getReturnMessage() Obtain The message indicating whether the operation is successful.
 * @method void setReturnMessage(string $ReturnMessage) Set The message indicating whether the operation is successful.
 * @method CreateInstancePreData getData() Obtain Data returned by the operation.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setData(CreateInstancePreData $Data) Set Data returned by the operation.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeleteRouteTimestamp() Obtain Deletion time.  This parameter has been deprecated and will be deleted.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) Set Deletion time.  This parameter has been deprecated and will be deleted.  Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateInstancePreResp extends AbstractModel
{
    /**
     * @var string Returned code. 0: Normal; other values: Error.
     */
    public $ReturnCode;

    /**
     * @var string The message indicating whether the operation is successful.
     */
    public $ReturnMessage;

    /**
     * @var CreateInstancePreData Data returned by the operation.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var string Deletion time.  This parameter has been deprecated and will be deleted.  Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DeleteRouteTimestamp;

    /**
     * @param string $ReturnCode Returned code. 0: Normal; other values: Error.
     * @param string $ReturnMessage The message indicating whether the operation is successful.
     * @param CreateInstancePreData $Data Data returned by the operation.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeleteRouteTimestamp Deletion time.  This parameter has been deprecated and will be deleted.  Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CreateInstancePreData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("DeleteRouteTimestamp",$param) and $param["DeleteRouteTimestamp"] !== null) {
            $this->DeleteRouteTimestamp = $param["DeleteRouteTimestamp"];
        }
    }
}

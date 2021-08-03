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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProductSecret response structure.
 *
 * @method string getSecretName() Obtain Name of the created credential.
 * @method void setSecretName(string $SecretName) Set Name of the created credential.
 * @method integer getTagCode() Obtain Tag operation return code. 0: success; 1: internal error; 2: business processing error.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagCode(integer $TagCode) Set Tag operation return code. 0: success; 1: internal error; 2: business processing error.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTagMsg() Obtain Tag operation return message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagMsg(string $TagMsg) Set Tag operation return message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFlowID() Obtain ID of the created Tencent Cloud service credential async task.
 * @method void setFlowID(integer $FlowID) Set ID of the created Tencent Cloud service credential async task.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateProductSecretResponse extends AbstractModel
{
    /**
     * @var string Name of the created credential.
     */
    public $SecretName;

    /**
     * @var integer Tag operation return code. 0: success; 1: internal error; 2: business processing error.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagCode;

    /**
     * @var string Tag operation return message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagMsg;

    /**
     * @var integer ID of the created Tencent Cloud service credential async task.
     */
    public $FlowID;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretName Name of the created credential.
     * @param integer $TagCode Tag operation return code. 0: success; 1: internal error; 2: business processing error.
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TagMsg Tag operation return message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FlowID ID of the created Tencent Cloud service credential async task.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("FlowID",$param) and $param["FlowID"] !== null) {
            $this->FlowID = $param["FlowID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

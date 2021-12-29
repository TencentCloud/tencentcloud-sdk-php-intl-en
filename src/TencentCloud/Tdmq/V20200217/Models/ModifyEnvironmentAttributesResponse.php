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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnvironmentAttributes response structure.
 *
 * @method string getEnvironmentId() Obtain Namespace name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace name.
 * @method integer getMsgTTL() Obtain TTL for unconsumed messages in seconds.
 * @method void setMsgTTL(integer $MsgTTL) Set TTL for unconsumed messages in seconds.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceId() Obtain Namespace ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceId(string $NamespaceId) Set Namespace ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyEnvironmentAttributesResponse extends AbstractModel
{
    /**
     * @var string Namespace name.
     */
    public $EnvironmentId;

    /**
     * @var integer TTL for unconsumed messages in seconds.
     */
    public $MsgTTL;

    /**
     * @var string Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Namespace ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $EnvironmentId Namespace name.
     * @param integer $MsgTTL TTL for unconsumed messages in seconds.
     * @param string $Remark Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceId Namespace ID
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

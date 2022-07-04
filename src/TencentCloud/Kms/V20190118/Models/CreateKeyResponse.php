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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKey response structure.
 *
 * @method string getKeyId() Obtain Globally unique CMK ID
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID
 * @method string getAlias() Obtain Alias that makes a key more recognizable and understandable
 * @method void setAlias(string $Alias) Set Alias that makes a key more recognizable and understandable
 * @method integer getCreateTime() Obtain Key creation time in UNIX timestamp format
 * @method void setCreateTime(integer $CreateTime) Set Key creation time in UNIX timestamp format
 * @method string getDescription() Obtain CMK description
 * @method void setDescription(string $Description) Set CMK description
 * @method string getKeyState() Obtain CMK status
 * @method void setKeyState(string $KeyState) Set CMK status
 * @method string getKeyUsage() Obtain CMK usage
 * @method void setKeyUsage(string $KeyUsage) Set CMK usage
 * @method integer getTagCode() Obtain Tag operation return code. 0: success; 1: internal error; 2: business processing error
 * @method void setTagCode(integer $TagCode) Set Tag operation return code. 0: success; 1: internal error; 2: business processing error
 * @method string getTagMsg() Obtain Tag operation return information
 * @method void setTagMsg(string $TagMsg) Set Tag operation return information
 * @method string getHsmClusterId() Obtain ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHsmClusterId(string $HsmClusterId) Set ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateKeyResponse extends AbstractModel
{
    /**
     * @var string Globally unique CMK ID
     */
    public $KeyId;

    /**
     * @var string Alias that makes a key more recognizable and understandable
     */
    public $Alias;

    /**
     * @var integer Key creation time in UNIX timestamp format
     */
    public $CreateTime;

    /**
     * @var string CMK description
     */
    public $Description;

    /**
     * @var string CMK status
     */
    public $KeyState;

    /**
     * @var string CMK usage
     */
    public $KeyUsage;

    /**
     * @var integer Tag operation return code. 0: success; 1: internal error; 2: business processing error
     */
    public $TagCode;

    /**
     * @var string Tag operation return information
     */
    public $TagMsg;

    /**
     * @var string ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HsmClusterId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $KeyId Globally unique CMK ID
     * @param string $Alias Alias that makes a key more recognizable and understandable
     * @param integer $CreateTime Key creation time in UNIX timestamp format
     * @param string $Description CMK description
     * @param string $KeyState CMK status
     * @param string $KeyUsage CMK usage
     * @param integer $TagCode Tag operation return code. 0: success; 1: internal error; 2: business processing error
     * @param string $TagMsg Tag operation return information
     * @param string $HsmClusterId ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

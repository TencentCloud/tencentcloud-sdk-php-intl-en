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
 * DescribeSecret response structure.
 *
 * @method string getSecretName() Obtain Name of the Secret.
 * @method void setSecretName(string $SecretName) Set Name of the Secret.
 * @method string getDescription() Obtain Description of the Secret.
 * @method void setDescription(string $Description) Set Description of the Secret.
 * @method string getKmsKeyId() Obtain ID of the KMS CMK used for encryption.
 * @method void setKmsKeyId(string $KmsKeyId) Set ID of the KMS CMK used for encryption.
 * @method integer getCreateUin() Obtain Creator UIN.
 * @method void setCreateUin(integer $CreateUin) Set Creator UIN.
 * @method string getStatus() Obtain Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
 * @method void setStatus(string $Status) Set Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
 * @method integer getDeleteTime() Obtain Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
 * @method void setDeleteTime(integer $DeleteTime) Set Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
 * @method integer getCreateTime() Obtain Creation time.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecretResponse extends AbstractModel
{
    /**
     * @var string Name of the Secret.
     */
    public $SecretName;

    /**
     * @var string Description of the Secret.
     */
    public $Description;

    /**
     * @var string ID of the KMS CMK used for encryption.
     */
    public $KmsKeyId;

    /**
     * @var integer Creator UIN.
     */
    public $CreateUin;

    /**
     * @var string Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
     */
    public $Status;

    /**
     * @var integer Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
     */
    public $DeleteTime;

    /**
     * @var integer Creation time.
     */
    public $CreateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretName Name of the Secret.
     * @param string $Description Description of the Secret.
     * @param string $KmsKeyId ID of the KMS CMK used for encryption.
     * @param integer $CreateUin Creator UIN.
     * @param string $Status Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
     * @param integer $DeleteTime Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
     * @param integer $CreateTime Creation time.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
 * @method string getStatus() Obtain Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
 * @method void setStatus(string $Status) Set Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
 * @method integer getDeleteTime() Obtain Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
 * @method void setDeleteTime(integer $DeleteTime) Set Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
 * @method integer getCreateTime() Obtain Creation time.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
 * @method integer getSecretType() Obtain `0`: user-defined secret; `1`: database credential; `2`: SSH key secret.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecretType(integer $SecretType) Set `0`: user-defined secret; `1`: database credential; `2`: SSH key secret.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Tencent Cloud service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Tencent Cloud service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResourceID() Obtain Tencent Cloud service instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceID(string $ResourceID) Set Tencent Cloud service instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getRotationStatus() Obtain Whether to enable rotation. `True`: enable rotation; `False`: disable rotation.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRotationStatus(boolean $RotationStatus) Set Whether to enable rotation. `True`: enable rotation; `False`: disable rotation.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRotationFrequency() Obtain Rotation frequency in days by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRotationFrequency(integer $RotationFrequency) Set Rotation frequency in days by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResourceName() Obtain Secret name. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Secret name. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectID() Obtain Project ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectID(integer $ProjectID) Set Project ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAssociatedInstanceIDs() Obtain ID of the CVM instance associated with the SSH key. ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedInstanceIDs(array $AssociatedInstanceIDs) Set ID of the CVM instance associated with the SSH key. ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetUin() Obtain UIN of the Tencent Cloud API key. This field is valid when the secret type is Tencent Cloud API key secret.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the Tencent Cloud API key. This field is valid when the secret type is Tencent Cloud API key secret.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdditionalConfig() Obtain Additional configuration of the Secret
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdditionalConfig(string $AdditionalConfig) Set Additional configuration of the Secret
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
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
     * @var integer `0`: user-defined secret; `1`: database credential; `2`: SSH key secret.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecretType;

    /**
     * @var string Tencent Cloud service name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var string Tencent Cloud service instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceID;

    /**
     * @var boolean Whether to enable rotation. `True`: enable rotation; `False`: disable rotation.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RotationStatus;

    /**
     * @var integer Rotation frequency in days by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RotationFrequency;

    /**
     * @var string Secret name. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceName;

    /**
     * @var integer Project ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectID;

    /**
     * @var array ID of the CVM instance associated with the SSH key. ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedInstanceIDs;

    /**
     * @var integer UIN of the Tencent Cloud API key. This field is valid when the secret type is Tencent Cloud API key secret.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetUin;

    /**
     * @var string Additional configuration of the Secret
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdditionalConfig;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretName Name of the Secret.
     * @param string $Description Description of the Secret.
     * @param string $KmsKeyId ID of the KMS CMK used for encryption.
     * @param integer $CreateUin Creator UIN.
     * @param string $Status Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
     * @param integer $DeleteTime Deletion time, formatted as a Unix timestamp. For a Secret that is not in `PendingDelete` status, this value is 0.
     * @param integer $CreateTime Creation time.
     * @param integer $SecretType `0`: user-defined secret; `1`: database credential; `2`: SSH key secret.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProductName Tencent Cloud service name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceID Tencent Cloud service instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $RotationStatus Whether to enable rotation. `True`: enable rotation; `False`: disable rotation.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RotationFrequency Rotation frequency in days by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceName Secret name. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectID Project ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AssociatedInstanceIDs ID of the CVM instance associated with the SSH key. ID. This field is only valid when the `SecretType` is set to `2` (SSH key secret).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetUin UIN of the Tencent Cloud API key. This field is valid when the secret type is Tencent Cloud API key secret.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdditionalConfig Additional configuration of the Secret
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("RotationStatus",$param) and $param["RotationStatus"] !== null) {
            $this->RotationStatus = $param["RotationStatus"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("AssociatedInstanceIDs",$param) and $param["AssociatedInstanceIDs"] !== null) {
            $this->AssociatedInstanceIDs = $param["AssociatedInstanceIDs"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("AdditionalConfig",$param) and $param["AdditionalConfig"] !== null) {
            $this->AdditionalConfig = $param["AdditionalConfig"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

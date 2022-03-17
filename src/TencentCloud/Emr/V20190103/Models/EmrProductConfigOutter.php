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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR product configuration
 *
 * @method array getSoftInfo() Obtain Software information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSoftInfo(array $SoftInfo) Set Software information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMasterNodeSize() Obtain Number of master nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMasterNodeSize(integer $MasterNodeSize) Set Number of master nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCoreNodeSize() Obtain Number of core nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoreNodeSize(integer $CoreNodeSize) Set Number of core nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskNodeSize() Obtain Number of task nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskNodeSize(integer $TaskNodeSize) Set Number of task nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getComNodeSize() Obtain Number of common nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setComNodeSize(integer $ComNodeSize) Set Number of common nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OutterResource getMasterResource() Obtain Master node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMasterResource(OutterResource $MasterResource) Set Master node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OutterResource getCoreResource() Obtain Core node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoreResource(OutterResource $CoreResource) Set Core node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OutterResource getTaskResource() Obtain Task node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskResource(OutterResource $TaskResource) Set Task node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OutterResource getComResource() Obtain Common node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setComResource(OutterResource $ComResource) Set Common node resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getOnCos() Obtain Whether COS is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOnCos(boolean $OnCos) Set Whether COS is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getChargeType() Obtain Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(integer $ChargeType) Set Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRouterNodeSize() Obtain Number of router nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRouterNodeSize(integer $RouterNodeSize) Set Number of router nodes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportHA() Obtain Whether HA is supported
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSupportHA(boolean $SupportHA) Set Whether HA is supported
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getSecurityOn() Obtain Whether secure mode is supported
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityOn(boolean $SecurityOn) Set Whether secure mode is supported
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSecurityGroup() Obtain Security group name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCbsEncrypt() Obtain Whether to enable CBS encryption
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCbsEncrypt(integer $CbsEncrypt) Set Whether to enable CBS encryption
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationRole() Obtain Custom application role
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setApplicationRole(string $ApplicationRole) Set Custom application role
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getSecurityGroups() Obtain Security groups
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setSecurityGroups(array $SecurityGroups) Set Security groups
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getPublicKeyId() Obtain SSH key ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicKeyId(string $PublicKeyId) Set SSH key ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EmrProductConfigOutter extends AbstractModel
{
    /**
     * @var array Software information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SoftInfo;

    /**
     * @var integer Number of master nodes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MasterNodeSize;

    /**
     * @var integer Number of core nodes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoreNodeSize;

    /**
     * @var integer Number of task nodes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskNodeSize;

    /**
     * @var integer Number of common nodes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ComNodeSize;

    /**
     * @var OutterResource Master node resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MasterResource;

    /**
     * @var OutterResource Core node resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoreResource;

    /**
     * @var OutterResource Task node resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskResource;

    /**
     * @var OutterResource Common node resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ComResource;

    /**
     * @var boolean Whether COS is used
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OnCos;

    /**
     * @var integer Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var integer Number of router nodes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RouterNodeSize;

    /**
     * @var boolean Whether HA is supported
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SupportHA;

    /**
     * @var boolean Whether secure mode is supported
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityOn;

    /**
     * @var string Security group name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityGroup;

    /**
     * @var integer Whether to enable CBS encryption
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CbsEncrypt;

    /**
     * @var string Custom application role
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ApplicationRole;

    /**
     * @var array Security groups
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $SecurityGroups;

    /**
     * @var string SSH key ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicKeyId;

    /**
     * @param array $SoftInfo Software information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MasterNodeSize Number of master nodes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CoreNodeSize Number of core nodes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskNodeSize Number of task nodes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ComNodeSize Number of common nodes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OutterResource $MasterResource Master node resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OutterResource $CoreResource Core node resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OutterResource $TaskResource Task node resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OutterResource $ComResource Common node resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $OnCos Whether COS is used
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ChargeType Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RouterNodeSize Number of router nodes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportHA Whether HA is supported
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $SecurityOn Whether secure mode is supported
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SecurityGroup Security group name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CbsEncrypt Whether to enable CBS encryption
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationRole Custom application role
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $SecurityGroups Security groups
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $PublicKeyId SSH key ID
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("MasterNodeSize",$param) and $param["MasterNodeSize"] !== null) {
            $this->MasterNodeSize = $param["MasterNodeSize"];
        }

        if (array_key_exists("CoreNodeSize",$param) and $param["CoreNodeSize"] !== null) {
            $this->CoreNodeSize = $param["CoreNodeSize"];
        }

        if (array_key_exists("TaskNodeSize",$param) and $param["TaskNodeSize"] !== null) {
            $this->TaskNodeSize = $param["TaskNodeSize"];
        }

        if (array_key_exists("ComNodeSize",$param) and $param["ComNodeSize"] !== null) {
            $this->ComNodeSize = $param["ComNodeSize"];
        }

        if (array_key_exists("MasterResource",$param) and $param["MasterResource"] !== null) {
            $this->MasterResource = new OutterResource();
            $this->MasterResource->deserialize($param["MasterResource"]);
        }

        if (array_key_exists("CoreResource",$param) and $param["CoreResource"] !== null) {
            $this->CoreResource = new OutterResource();
            $this->CoreResource->deserialize($param["CoreResource"]);
        }

        if (array_key_exists("TaskResource",$param) and $param["TaskResource"] !== null) {
            $this->TaskResource = new OutterResource();
            $this->TaskResource->deserialize($param["TaskResource"]);
        }

        if (array_key_exists("ComResource",$param) and $param["ComResource"] !== null) {
            $this->ComResource = new OutterResource();
            $this->ComResource->deserialize($param["ComResource"]);
        }

        if (array_key_exists("OnCos",$param) and $param["OnCos"] !== null) {
            $this->OnCos = $param["OnCos"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("RouterNodeSize",$param) and $param["RouterNodeSize"] !== null) {
            $this->RouterNodeSize = $param["RouterNodeSize"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("SecurityOn",$param) and $param["SecurityOn"] !== null) {
            $this->SecurityOn = $param["SecurityOn"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
        }

        if (array_key_exists("ApplicationRole",$param) and $param["ApplicationRole"] !== null) {
            $this->ApplicationRole = $param["ApplicationRole"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("PublicKeyId",$param) and $param["PublicKeyId"] !== null) {
            $this->PublicKeyId = $param["PublicKeyId"];
        }
    }
}

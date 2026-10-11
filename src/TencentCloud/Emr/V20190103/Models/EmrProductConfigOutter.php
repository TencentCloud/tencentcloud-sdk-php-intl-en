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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR product configuration.
 *
 * @method array getSoftInfo() Obtain Software information.
 * @method void setSoftInfo(array $SoftInfo) Set Software information.
 * @method integer getMasterNodeSize() Obtain Number of Master nodes.
 * @method void setMasterNodeSize(integer $MasterNodeSize) Set Number of Master nodes.
 * @method integer getCoreNodeSize() Obtain Number of Core nodes.
 * @method void setCoreNodeSize(integer $CoreNodeSize) Set Number of Core nodes.
 * @method integer getTaskNodeSize() Obtain Number of Task nodes.
 * @method void setTaskNodeSize(integer $TaskNodeSize) Set Number of Task nodes.
 * @method integer getComNodeSize() Obtain Number of Common nodes.
 * @method void setComNodeSize(integer $ComNodeSize) Set Number of Common nodes.
 * @method OutterResource getMasterResource() Obtain Master node resources.
 * @method void setMasterResource(OutterResource $MasterResource) Set Master node resources.
 * @method OutterResource getCoreResource() Obtain Core node resources.
 * @method void setCoreResource(OutterResource $CoreResource) Set Core node resources.
 * @method OutterResource getTaskResource() Obtain Task node resources.
 * @method void setTaskResource(OutterResource $TaskResource) Set Task node resources.
 * @method OutterResource getComResource() Obtain Common node resources.
 * @method void setComResource(OutterResource $ComResource) Set Common node resources.
 * @method boolean getOnCos() Obtain Whether COS is used.
 * @method void setOnCos(boolean $OnCos) Set Whether COS is used.
 * @method integer getChargeType() Obtain Charge type.
 * @method void setChargeType(integer $ChargeType) Set Charge type.
 * @method integer getRouterNodeSize() Obtain Number of Router nodes.
 * @method void setRouterNodeSize(integer $RouterNodeSize) Set Number of Router nodes.
 * @method boolean getSupportHA() Obtain Whether HA is supported.
 * @method void setSupportHA(boolean $SupportHA) Set Whether HA is supported.
 * @method boolean getSecurityOn() Obtain Whether security mode is supported.
 * @method void setSecurityOn(boolean $SecurityOn) Set Whether security mode is supported.
 * @method string getSecurityGroup() Obtain Initial security group ID of the cluster.
 * @method void setSecurityGroup(string $SecurityGroup) Set Initial security group ID of the cluster.
 * @method integer getCbsEncrypt() Obtain Whether CBS encryption is enabled.
 * @method void setCbsEncrypt(integer $CbsEncrypt) Set Whether CBS encryption is enabled.
 * @method string getApplicationRole() Obtain Custom application role.
 * @method void setApplicationRole(string $ApplicationRole) Set Custom application role.
 * @method array getSecurityGroups() Obtain Security group ID.
 * @method void setSecurityGroups(array $SecurityGroups) Set Security group ID.
 * @method string getPublicKeyId() Obtain SSH key ID.
 * @method void setPublicKeyId(string $PublicKeyId) Set SSH key ID.
 */
class EmrProductConfigOutter extends AbstractModel
{
    /**
     * @var array Software information.
     */
    public $SoftInfo;

    /**
     * @var integer Number of Master nodes.
     */
    public $MasterNodeSize;

    /**
     * @var integer Number of Core nodes.
     */
    public $CoreNodeSize;

    /**
     * @var integer Number of Task nodes.
     */
    public $TaskNodeSize;

    /**
     * @var integer Number of Common nodes.
     */
    public $ComNodeSize;

    /**
     * @var OutterResource Master node resources.
     */
    public $MasterResource;

    /**
     * @var OutterResource Core node resources.
     */
    public $CoreResource;

    /**
     * @var OutterResource Task node resources.
     */
    public $TaskResource;

    /**
     * @var OutterResource Common node resources.
     */
    public $ComResource;

    /**
     * @var boolean Whether COS is used.
     */
    public $OnCos;

    /**
     * @var integer Charge type.
     */
    public $ChargeType;

    /**
     * @var integer Number of Router nodes.
     */
    public $RouterNodeSize;

    /**
     * @var boolean Whether HA is supported.
     */
    public $SupportHA;

    /**
     * @var boolean Whether security mode is supported.
     */
    public $SecurityOn;

    /**
     * @var string Initial security group ID of the cluster.
     */
    public $SecurityGroup;

    /**
     * @var integer Whether CBS encryption is enabled.
     */
    public $CbsEncrypt;

    /**
     * @var string Custom application role.
     */
    public $ApplicationRole;

    /**
     * @var array Security group ID.
     */
    public $SecurityGroups;

    /**
     * @var string SSH key ID.
     */
    public $PublicKeyId;

    /**
     * @param array $SoftInfo Software information.
     * @param integer $MasterNodeSize Number of Master nodes.
     * @param integer $CoreNodeSize Number of Core nodes.
     * @param integer $TaskNodeSize Number of Task nodes.
     * @param integer $ComNodeSize Number of Common nodes.
     * @param OutterResource $MasterResource Master node resources.
     * @param OutterResource $CoreResource Core node resources.
     * @param OutterResource $TaskResource Task node resources.
     * @param OutterResource $ComResource Common node resources.
     * @param boolean $OnCos Whether COS is used.
     * @param integer $ChargeType Charge type.
     * @param integer $RouterNodeSize Number of Router nodes.
     * @param boolean $SupportHA Whether HA is supported.
     * @param boolean $SecurityOn Whether security mode is supported.
     * @param string $SecurityGroup Initial security group ID of the cluster.
     * @param integer $CbsEncrypt Whether CBS encryption is enabled.
     * @param string $ApplicationRole Custom application role.
     * @param array $SecurityGroups Security group ID.
     * @param string $PublicKeyId SSH key ID.
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

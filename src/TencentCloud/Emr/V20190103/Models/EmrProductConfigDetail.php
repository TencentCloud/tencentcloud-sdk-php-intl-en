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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSoftInfo(array $SoftInfo) Set Software information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMasterNodeSize() Obtain Number of Master nodes.
 * @method void setMasterNodeSize(integer $MasterNodeSize) Set Number of Master nodes.
 * @method integer getCoreNodeSize() Obtain Number of Core nodes.
 * @method void setCoreNodeSize(integer $CoreNodeSize) Set Number of Core nodes.
 * @method integer getTaskNodeSize() Obtain Number of Task nodes.
 * @method void setTaskNodeSize(integer $TaskNodeSize) Set Number of Task nodes.
 * @method integer getComNodeSize() Obtain Number of Common nodes.
 * @method void setComNodeSize(integer $ComNodeSize) Set Number of Common nodes.
 * @method ResourceDetail getMasterResource() Obtain Primary node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterResource(ResourceDetail $MasterResource) Set Primary node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceDetail getCoreResource() Obtain Core node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoreResource(ResourceDetail $CoreResource) Set Core node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceDetail getTaskResource() Obtain Task node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskResource(ResourceDetail $TaskResource) Set Task node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceDetail getComResource() Obtain Common node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComResource(ResourceDetail $ComResource) Set Common node resources

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getOnCos() Obtain Whether to use COS.
 * @method void setOnCos(boolean $OnCos) Set Whether to use COS.
 * @method integer getChargeType() Obtain Charge type.
 * @method void setChargeType(integer $ChargeType) Set Charge type.
 * @method integer getRouterNodeSize() Obtain Number of Router nodes.
 * @method void setRouterNodeSize(integer $RouterNodeSize) Set Number of Router nodes.
 * @method boolean getSupportHA() Obtain Whether HA is supported.
 * @method void setSupportHA(boolean $SupportHA) Set Whether HA is supported.
 * @method boolean getSecurityOn() Obtain Whether security mode is supported.
 * @method void setSecurityOn(boolean $SecurityOn) Set Whether security mode is supported.
 * @method string getSecurityGroup() Obtain Security group name.
 * @method void setSecurityGroup(string $SecurityGroup) Set Security group name.
 * @method integer getCbsEncrypt() Obtain Whether to enable CBS encryption.
 * @method void setCbsEncrypt(integer $CbsEncrypt) Set Whether to enable CBS encryption.
 * @method string getApplicationRole() Obtain Custom application role.
 * @method void setApplicationRole(string $ApplicationRole) Set Custom application role.
 * @method array getSecurityGroups() Obtain Security group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityGroups(array $SecurityGroups) Set Security group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicKeyId() Obtain SSH key ID.
 * @method void setPublicKeyId(string $PublicKeyId) Set SSH key ID.
 */
class EmrProductConfigDetail extends AbstractModel
{
    /**
     * @var array Software information.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var ResourceDetail Primary node resources

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterResource;

    /**
     * @var ResourceDetail Core node resources

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoreResource;

    /**
     * @var ResourceDetail Task node resources

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskResource;

    /**
     * @var ResourceDetail Common node resources

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComResource;

    /**
     * @var boolean Whether to use COS.
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
     * @var string Security group name.
     */
    public $SecurityGroup;

    /**
     * @var integer Whether to enable CBS encryption.
     */
    public $CbsEncrypt;

    /**
     * @var string Custom application role.
     */
    public $ApplicationRole;

    /**
     * @var array Security group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityGroups;

    /**
     * @var string SSH key ID.
     */
    public $PublicKeyId;

    /**
     * @param array $SoftInfo Software information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MasterNodeSize Number of Master nodes.
     * @param integer $CoreNodeSize Number of Core nodes.
     * @param integer $TaskNodeSize Number of Task nodes.
     * @param integer $ComNodeSize Number of Common nodes.
     * @param ResourceDetail $MasterResource Primary node resources

Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceDetail $CoreResource Core node resources

Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceDetail $TaskResource Task node resources

Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceDetail $ComResource Common node resources

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $OnCos Whether to use COS.
     * @param integer $ChargeType Charge type.
     * @param integer $RouterNodeSize Number of Router nodes.
     * @param boolean $SupportHA Whether HA is supported.
     * @param boolean $SecurityOn Whether security mode is supported.
     * @param string $SecurityGroup Security group name.
     * @param integer $CbsEncrypt Whether to enable CBS encryption.
     * @param string $ApplicationRole Custom application role.
     * @param array $SecurityGroups Security group.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->MasterResource = new ResourceDetail();
            $this->MasterResource->deserialize($param["MasterResource"]);
        }

        if (array_key_exists("CoreResource",$param) and $param["CoreResource"] !== null) {
            $this->CoreResource = new ResourceDetail();
            $this->CoreResource->deserialize($param["CoreResource"]);
        }

        if (array_key_exists("TaskResource",$param) and $param["TaskResource"] !== null) {
            $this->TaskResource = new ResourceDetail();
            $this->TaskResource->deserialize($param["TaskResource"]);
        }

        if (array_key_exists("ComResource",$param) and $param["ComResource"] !== null) {
            $this->ComResource = new ResourceDetail();
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

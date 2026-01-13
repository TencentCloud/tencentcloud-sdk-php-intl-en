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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoute request structure.
 *
 * @method string getInstanceId() Obtain <p>Specifies the ckafka cluster instance id. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a>.</p>.
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the ckafka cluster instance id. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a>.</p>.
 * @method integer getVipType() Obtain <P>Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).</p>.
 * @method void setVipType(integer $VipType) Set <P>Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).</p>.
 * @method string getVpcId() Obtain <p>vpc network Id. required when vipType is 3.</p>.
 * @method void setVpcId(string $VpcId) Set <p>vpc network Id. required when vipType is 3.</p>.
 * @method string getSubnetId() Obtain <p>Specifies the vpc subnet id. required when vipType is 3.</p>.
 * @method void setSubnetId(string $SubnetId) Set <p>Specifies the vpc subnet id. required when vipType is 3.</p>.
 * @method integer getAccessType() Obtain <p>Access type: 0-plaintext; 1-sasl_plaintext; 3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512. defaults to 0. when vipType=3, supports 0,1,3,4,5. when vipType=7, supports 0,1,3. when vipType=1, supports 1,3.</p>.
 * @method void setAccessType(integer $AccessType) Set <p>Access type: 0-plaintext; 1-sasl_plaintext; 3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512. defaults to 0. when vipType=3, supports 0,1,3,4,5. when vipType=7, supports 0,1,3. when vipType=1, supports 1,3.</p>.
 * @method integer getAuthFlag() Obtain <P>Specifies whether access management is required. this field has been deprecated.</p>.
 * @method void setAuthFlag(integer $AuthFlag) Set <P>Specifies whether access management is required. this field has been deprecated.</p>.
 * @method integer getCallerAppid() Obtain <p>Specifies the caller appId.</p>.
 * @method void setCallerAppid(integer $CallerAppid) Set <p>Specifies the caller appId.</p>.
 * @method integer getPublicNetwork() Obtain <P>Public network bandwidth. required for public network route. must be a multiple of 3. no default value.</p>.
 * @method void setPublicNetwork(integer $PublicNetwork) Set <P>Public network bandwidth. required for public network route. must be a multiple of 3. no default value.</p>.
 * @method string getIp() Obtain <p>vip address.</p>.
 * @method void setIp(string $Ip) Set <p>vip address.</p>.
 * @method string getNote() Obtain <P>Specifies the remark information.</p>.
 * @method void setNote(string $Note) Set <P>Specifies the remark information.</p>.
 * @method array getSecurityGroupIds() Obtain <P>Specifies the ordered list of security group associations.</p>.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <P>Specifies the ordered list of security group associations.</p>.
 */
class CreateRouteRequest extends AbstractModel
{
    /**
     * @var string <p>Specifies the ckafka cluster instance id. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a>.</p>.
     */
    public $InstanceId;

    /**
     * @var integer <P>Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).</p>.
     */
    public $VipType;

    /**
     * @var string <p>vpc network Id. required when vipType is 3.</p>.
     */
    public $VpcId;

    /**
     * @var string <p>Specifies the vpc subnet id. required when vipType is 3.</p>.
     */
    public $SubnetId;

    /**
     * @var integer <p>Access type: 0-plaintext; 1-sasl_plaintext; 3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512. defaults to 0. when vipType=3, supports 0,1,3,4,5. when vipType=7, supports 0,1,3. when vipType=1, supports 1,3.</p>.
     */
    public $AccessType;

    /**
     * @var integer <P>Specifies whether access management is required. this field has been deprecated.</p>.
     */
    public $AuthFlag;

    /**
     * @var integer <p>Specifies the caller appId.</p>.
     */
    public $CallerAppid;

    /**
     * @var integer <P>Public network bandwidth. required for public network route. must be a multiple of 3. no default value.</p>.
     */
    public $PublicNetwork;

    /**
     * @var string <p>vip address.</p>.
     */
    public $Ip;

    /**
     * @var string <P>Specifies the remark information.</p>.
     */
    public $Note;

    /**
     * @var array <P>Specifies the ordered list of security group associations.</p>.
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId <p>Specifies the ckafka cluster instance id. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a>.</p>.
     * @param integer $VipType <P>Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).</p>.
     * @param string $VpcId <p>vpc network Id. required when vipType is 3.</p>.
     * @param string $SubnetId <p>Specifies the vpc subnet id. required when vipType is 3.</p>.
     * @param integer $AccessType <p>Access type: 0-plaintext; 1-sasl_plaintext; 3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512. defaults to 0. when vipType=3, supports 0,1,3,4,5. when vipType=7, supports 0,1,3. when vipType=1, supports 1,3.</p>.
     * @param integer $AuthFlag <P>Specifies whether access management is required. this field has been deprecated.</p>.
     * @param integer $CallerAppid <p>Specifies the caller appId.</p>.
     * @param integer $PublicNetwork <P>Public network bandwidth. required for public network route. must be a multiple of 3. no default value.</p>.
     * @param string $Ip <p>vip address.</p>.
     * @param string $Note <P>Specifies the remark information.</p>.
     * @param array $SecurityGroupIds <P>Specifies the ordered list of security group associations.</p>.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AuthFlag",$param) and $param["AuthFlag"] !== null) {
            $this->AuthFlag = $param["AuthFlag"];
        }

        if (array_key_exists("CallerAppid",$param) and $param["CallerAppid"] !== null) {
            $this->CallerAppid = $param["CallerAppid"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}

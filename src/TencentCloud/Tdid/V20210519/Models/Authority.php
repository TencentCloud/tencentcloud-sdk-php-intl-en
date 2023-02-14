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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of an authority.
 *
 * @method integer getId() Obtain The authority ID.
 * @method void setId(integer $Id) Set The authority ID.
 * @method integer getDidId() Obtain The DID.
 * @method void setDidId(integer $DidId) Set The DID.
 * @method string getDid() Obtain The details of the DID.
 * @method void setDid(string $Did) Set The details of the DID.
 * @method string getName() Obtain The authority name.
 * @method void setName(string $Name) Set The authority name.
 * @method integer getStatus() Obtain Whether the authority is certified. `1`: Yes; `2`: No.
 * @method void setStatus(integer $Status) Set Whether the authority is certified. `1`: Yes; `2`: No.
 * @method integer getDidServiceId() Obtain The DID service ID.
 * @method void setDidServiceId(integer $DidServiceId) Set The DID service ID.
 * @method integer getContractAppId() Obtain The application ID.
 * @method void setContractAppId(integer $ContractAppId) Set The application ID.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getRegisterTime() Obtain The registration time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegisterTime(string $RegisterTime) Set The registration time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRecognizeTime() Obtain The recognition time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRecognizeTime(string $RecognizeTime) Set The recognition time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The last updated time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 * @method string getLabelName() Obtain The on-chain label.
 * @method void setLabelName(string $LabelName) Set The on-chain label.
 */
class Authority extends AbstractModel
{
    /**
     * @var integer The authority ID.
     */
    public $Id;

    /**
     * @var integer The DID.
     */
    public $DidId;

    /**
     * @var string The details of the DID.
     */
    public $Did;

    /**
     * @var string The authority name.
     */
    public $Name;

    /**
     * @var integer Whether the authority is certified. `1`: Yes; `2`: No.
     */
    public $Status;

    /**
     * @var integer The DID service ID.
     */
    public $DidServiceId;

    /**
     * @var integer The application ID.
     */
    public $ContractAppId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string The registration time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RegisterTime;

    /**
     * @var string The recognition time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RecognizeTime;

    /**
     * @var string The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string The last updated time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The application name.
     */
    public $AppName;

    /**
     * @var string The on-chain label.
     */
    public $LabelName;

    /**
     * @param integer $Id The authority ID.
     * @param integer $DidId The DID.
     * @param string $Did The details of the DID.
     * @param string $Name The authority name.
     * @param integer $Status Whether the authority is certified. `1`: Yes; `2`: No.
     * @param integer $DidServiceId The DID service ID.
     * @param integer $ContractAppId The application ID.
     * @param string $Remark Remarks
     * @param string $RegisterTime The registration time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RecognizeTime The recognition time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $UpdateTime The last updated time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param string $AppName The application name.
     * @param string $LabelName The on-chain label.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DidId",$param) and $param["DidId"] !== null) {
            $this->DidId = $param["DidId"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DidServiceId",$param) and $param["DidServiceId"] !== null) {
            $this->DidServiceId = $param["DidServiceId"];
        }

        if (array_key_exists("ContractAppId",$param) and $param["ContractAppId"] !== null) {
            $this->ContractAppId = $param["ContractAppId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("RecognizeTime",$param) and $param["RecognizeTime"] !== null) {
            $this->RecognizeTime = $param["RecognizeTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }
    }
}

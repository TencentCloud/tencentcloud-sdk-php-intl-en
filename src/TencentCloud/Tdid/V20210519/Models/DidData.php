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
 * The information of DIDs.
 *
 * @method integer getServiceId() Obtain The service ID.
 * @method void setServiceId(integer $ServiceId) Set The service ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 * @method string getDid() Obtain The DID.
 * @method void setDid(string $Did) Set The DID.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getAuthorityState() Obtain The status of the authority. `1`: Not registered; `2`: Not certified; `3`: Certified.
 * @method void setAuthorityState(integer $AuthorityState) Set The status of the authority. `1`: Not registered; `2`: Not certified; `3`: Certified.
 * @method string getLabelName() Obtain The label of the DID.
 * @method void setLabelName(string $LabelName) Set The label of the DID.
 * @method string getCreatedAt() Obtain The DID creation time.
 * @method void setCreatedAt(string $CreatedAt) Set The DID creation time.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getAllianceName() Obtain The consortium name.
 * @method void setAllianceName(string $AllianceName) Set The consortium name.
 * @method integer getLabelId() Obtain The label ID.
 * @method void setLabelId(integer $LabelId) Set The label ID.
 */
class DidData extends AbstractModel
{
    /**
     * @var integer The service ID.
     */
    public $ServiceId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The application name.
     */
    public $AppName;

    /**
     * @var string The DID.
     */
    public $Did;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer The status of the authority. `1`: Not registered; `2`: Not certified; `3`: Certified.
     */
    public $AuthorityState;

    /**
     * @var string The label of the DID.
     */
    public $LabelName;

    /**
     * @var string The DID creation time.
     */
    public $CreatedAt;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The consortium name.
     */
    public $AllianceName;

    /**
     * @var integer The label ID.
     */
    public $LabelId;

    /**
     * @param integer $ServiceId The service ID.
     * @param integer $GroupId The group ID.
     * @param string $AppName The application name.
     * @param string $Did The DID.
     * @param string $Remark Remarks
     * @param integer $AuthorityState The status of the authority. `1`: Not registered; `2`: Not certified; `3`: Certified.
     * @param string $LabelName The label of the DID.
     * @param string $CreatedAt The DID creation time.
     * @param string $ClusterId The network ID.
     * @param string $AllianceName The consortium name.
     * @param integer $LabelId The label ID.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AuthorityState",$param) and $param["AuthorityState"] !== null) {
            $this->AuthorityState = $param["AuthorityState"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AllianceName",$param) and $param["AllianceName"] !== null) {
            $this->AllianceName = $param["AllianceName"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }
    }
}

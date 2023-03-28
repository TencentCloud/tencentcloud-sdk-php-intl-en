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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSyncJob request structure.
 *
 * @method string getPayMode() Obtain Billing mode. Valid values: `PrePay` (monthly subscription); `PostPay` (pay-as-you-go). Currently, DTS at Tencent Cloud International is free of charge.
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `PrePay` (monthly subscription); `PostPay` (pay-as-you-go). Currently, DTS at Tencent Cloud International is free of charge.
 * @method string getSrcDatabaseType() Obtain Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
 * @method string getSrcRegion() Obtain Source database region, such as `ap-guangzhou`.
 * @method void setSrcRegion(string $SrcRegion) Set Source database region, such as `ap-guangzhou`.
 * @method string getDstDatabaseType() Obtain Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, `tdsqlmysql`, and `kafka`.
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, `tdsqlmysql`, and `kafka`.
 * @method string getDstRegion() Obtain Target database region, such as `ap-guangzhou`.
 * @method void setDstRegion(string $DstRegion) Set Target database region, such as `ap-guangzhou`.
 * @method string getSpecification() Obtain Sync task specification, such as `Standard`.
 * @method void setSpecification(string $Specification) Set Sync task specification, such as `Standard`.
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 * @method integer getCount() Obtain The number of sync tasks purchased at a time. Value range: [1, 10]. Default value: `1`.
 * @method void setCount(integer $Count) Set The number of sync tasks purchased at a time. Value range: [1, 10]. Default value: `1`.
 * @method integer getAutoRenew() Obtain Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled). Default value: `0`.
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled). Default value: `0`.
 * @method string getInstanceClass() Obtain Sync link specification, such as `micro`, `small`, `medium`, and `large`. Default value: `medium`.
 * @method void setInstanceClass(string $InstanceClass) Set Sync link specification, such as `micro`, `small`, `medium`, and `large`. Default value: `medium`.
 * @method string getJobName() Obtain Sync task name
 * @method void setJobName(string $JobName) Set Sync task name
 * @method string getExistedJobId() Obtain ID of the existing task used to create a similar task
 * @method void setExistedJobId(string $ExistedJobId) Set ID of the existing task used to create a similar task
 */
class CreateSyncJobRequest extends AbstractModel
{
    /**
     * @var string Billing mode. Valid values: `PrePay` (monthly subscription); `PostPay` (pay-as-you-go). Currently, DTS at Tencent Cloud International is free of charge.
     */
    public $PayMode;

    /**
     * @var string Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
     */
    public $SrcDatabaseType;

    /**
     * @var string Source database region, such as `ap-guangzhou`.
     */
    public $SrcRegion;

    /**
     * @var string Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, `tdsqlmysql`, and `kafka`.
     */
    public $DstDatabaseType;

    /**
     * @var string Target database region, such as `ap-guangzhou`.
     */
    public $DstRegion;

    /**
     * @var string Sync task specification, such as `Standard`.
     */
    public $Specification;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @var integer The number of sync tasks purchased at a time. Value range: [1, 10]. Default value: `1`.
     */
    public $Count;

    /**
     * @var integer Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled). Default value: `0`.
     */
    public $AutoRenew;

    /**
     * @var string Sync link specification, such as `micro`, `small`, `medium`, and `large`. Default value: `medium`.
     */
    public $InstanceClass;

    /**
     * @var string Sync task name
     */
    public $JobName;

    /**
     * @var string ID of the existing task used to create a similar task
     */
    public $ExistedJobId;

    /**
     * @param string $PayMode Billing mode. Valid values: `PrePay` (monthly subscription); `PostPay` (pay-as-you-go). Currently, DTS at Tencent Cloud International is free of charge.
     * @param string $SrcDatabaseType Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
     * @param string $SrcRegion Source database region, such as `ap-guangzhou`.
     * @param string $DstDatabaseType Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, `tdsqlmysql`, and `kafka`.
     * @param string $DstRegion Target database region, such as `ap-guangzhou`.
     * @param string $Specification Sync task specification, such as `Standard`.
     * @param array $Tags Tag information
     * @param integer $Count The number of sync tasks purchased at a time. Value range: [1, 10]. Default value: `1`.
     * @param integer $AutoRenew Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled). Default value: `0`.
     * @param string $InstanceClass Sync link specification, such as `micro`, `small`, `medium`, and `large`. Default value: `medium`.
     * @param string $JobName Sync task name
     * @param string $ExistedJobId ID of the existing task used to create a similar task
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ExistedJobId",$param) and $param["ExistedJobId"] !== null) {
            $this->ExistedJobId = $param["ExistedJobId"];
        }
    }
}

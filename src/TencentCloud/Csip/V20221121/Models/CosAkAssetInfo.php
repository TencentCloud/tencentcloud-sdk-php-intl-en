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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos-associated ak asset information
 *
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method string getAkId() Obtain ak id
 * @method void setAkId(string $AkId) Set ak id
 * @method string getAkName() Obtain ak name
 * @method void setAkName(string $AkName) Set ak name
 * @method string getAkRemark() Obtain ak remark
 * @method void setAkRemark(string $AkRemark) Set ak remark
 * @method string getAkOwnerUin() Obtain uin associated with the ak
 * @method void setAkOwnerUin(string $AkOwnerUin) Set uin associated with the ak
 * @method integer getAkOwnerType() Obtain ak type. 1: primary. 2: sub
 * @method void setAkOwnerType(integer $AkOwnerType) Set ak type. 1: primary. 2: sub
 * @method string getAkOwnerName() Obtain ak account name
 * @method void setAkOwnerName(string $AkOwnerName) Set ak account name
 * @method string getAkMainOwnerName() Obtain ak main account name
 * @method void setAkMainOwnerName(string $AkMainOwnerName) Set ak main account name
 * @method array getAkRelBucketSet() Obtain ak-associated bucket collection
 * @method void setAkRelBucketSet(array $AkRelBucketSet) Set ak-associated bucket collection
 * @method array getAkRelAlarmSet() Obtain ak associated alarm collection
 * @method void setAkRelAlarmSet(array $AkRelAlarmSet) Set ak associated alarm collection
 * @method integer getAkRelIpCount() Obtain Number of IPs associated with Ak
 * @method void setAkRelIpCount(integer $AkRelIpCount) Set Number of IPs associated with Ak
 * @method integer getAkStatus() Obtain ak status. 0: disabled. 1: enabled.
 * @method void setAkStatus(integer $AkStatus) Set ak status. 0: disabled. 1: enabled.
 * @method integer getCreateTimestamp() Obtain Creation time.
 * @method void setCreateTimestamp(integer $CreateTimestamp) Set Creation time.
 * @method integer getLastAccessTimestamp() Obtain Last access time
 * @method void setLastAccessTimestamp(integer $LastAccessTimestamp) Set Last access time
 */
class CosAkAssetInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string ak id
     */
    public $AkId;

    /**
     * @var string ak name
     */
    public $AkName;

    /**
     * @var string ak remark
     */
    public $AkRemark;

    /**
     * @var string uin associated with the ak
     */
    public $AkOwnerUin;

    /**
     * @var integer ak type. 1: primary. 2: sub
     */
    public $AkOwnerType;

    /**
     * @var string ak account name
     */
    public $AkOwnerName;

    /**
     * @var string ak main account name
     */
    public $AkMainOwnerName;

    /**
     * @var array ak-associated bucket collection
     */
    public $AkRelBucketSet;

    /**
     * @var array ak associated alarm collection
     */
    public $AkRelAlarmSet;

    /**
     * @var integer Number of IPs associated with Ak
     */
    public $AkRelIpCount;

    /**
     * @var integer ak status. 0: disabled. 1: enabled.
     */
    public $AkStatus;

    /**
     * @var integer Creation time.
     */
    public $CreateTimestamp;

    /**
     * @var integer Last access time
     */
    public $LastAccessTimestamp;

    /**
     * @param integer $AppId appid
     * @param string $AkId ak id
     * @param string $AkName ak name
     * @param string $AkRemark ak remark
     * @param string $AkOwnerUin uin associated with the ak
     * @param integer $AkOwnerType ak type. 1: primary. 2: sub
     * @param string $AkOwnerName ak account name
     * @param string $AkMainOwnerName ak main account name
     * @param array $AkRelBucketSet ak-associated bucket collection
     * @param array $AkRelAlarmSet ak associated alarm collection
     * @param integer $AkRelIpCount Number of IPs associated with Ak
     * @param integer $AkStatus ak status. 0: disabled. 1: enabled.
     * @param integer $CreateTimestamp Creation time.
     * @param integer $LastAccessTimestamp Last access time
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AkId",$param) and $param["AkId"] !== null) {
            $this->AkId = $param["AkId"];
        }

        if (array_key_exists("AkName",$param) and $param["AkName"] !== null) {
            $this->AkName = $param["AkName"];
        }

        if (array_key_exists("AkRemark",$param) and $param["AkRemark"] !== null) {
            $this->AkRemark = $param["AkRemark"];
        }

        if (array_key_exists("AkOwnerUin",$param) and $param["AkOwnerUin"] !== null) {
            $this->AkOwnerUin = $param["AkOwnerUin"];
        }

        if (array_key_exists("AkOwnerType",$param) and $param["AkOwnerType"] !== null) {
            $this->AkOwnerType = $param["AkOwnerType"];
        }

        if (array_key_exists("AkOwnerName",$param) and $param["AkOwnerName"] !== null) {
            $this->AkOwnerName = $param["AkOwnerName"];
        }

        if (array_key_exists("AkMainOwnerName",$param) and $param["AkMainOwnerName"] !== null) {
            $this->AkMainOwnerName = $param["AkMainOwnerName"];
        }

        if (array_key_exists("AkRelBucketSet",$param) and $param["AkRelBucketSet"] !== null) {
            $this->AkRelBucketSet = $param["AkRelBucketSet"];
        }

        if (array_key_exists("AkRelAlarmSet",$param) and $param["AkRelAlarmSet"] !== null) {
            $this->AkRelAlarmSet = [];
            foreach ($param["AkRelAlarmSet"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->AkRelAlarmSet, $obj);
            }
        }

        if (array_key_exists("AkRelIpCount",$param) and $param["AkRelIpCount"] !== null) {
            $this->AkRelIpCount = $param["AkRelIpCount"];
        }

        if (array_key_exists("AkStatus",$param) and $param["AkStatus"] !== null) {
            $this->AkStatus = $param["AkStatus"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("LastAccessTimestamp",$param) and $param["LastAccessTimestamp"] !== null) {
            $this->LastAccessTimestamp = $param["LastAccessTimestamp"];
        }
    }
}

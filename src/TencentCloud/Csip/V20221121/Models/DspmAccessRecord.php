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
 * Dspm access record
 *
 * @method DspmDbAsset getAsset() Obtain Asset information
 * @method void setAsset(DspmDbAsset $Asset) Set Asset information
 * @method array getAccounts() Obtain Account
 * @method void setAccounts(array $Accounts) Set Account
 * @method array getSourceIpList() Obtain Source ip information
 * @method void setSourceIpList(array $SourceIpList) Set Source ip information
 * @method string getRecordTime() Obtain Recording time
 * @method void setRecordTime(string $RecordTime) Set Recording time
 * @method integer getLoginSuccessCount() Obtain Number of successful logins
 * @method void setLoginSuccessCount(integer $LoginSuccessCount) Set Number of successful logins
 * @method integer getLoginFailedCount() Obtain Login failure count
 * @method void setLoginFailedCount(integer $LoginFailedCount) Set Login failure count
 */
class DspmAccessRecord extends AbstractModel
{
    /**
     * @var DspmDbAsset Asset information
     */
    public $Asset;

    /**
     * @var array Account
     */
    public $Accounts;

    /**
     * @var array Source ip information
     */
    public $SourceIpList;

    /**
     * @var string Recording time
     */
    public $RecordTime;

    /**
     * @var integer Number of successful logins
     */
    public $LoginSuccessCount;

    /**
     * @var integer Login failure count
     */
    public $LoginFailedCount;

    /**
     * @param DspmDbAsset $Asset Asset information
     * @param array $Accounts Account
     * @param array $SourceIpList Source ip information
     * @param string $RecordTime Recording time
     * @param integer $LoginSuccessCount Number of successful logins
     * @param integer $LoginFailedCount Login failure count
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new DspmDbAsset();
            $this->Asset->deserialize($param["Asset"]);
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new DspmAssetAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("SourceIpList",$param) and $param["SourceIpList"] !== null) {
            $this->SourceIpList = [];
            foreach ($param["SourceIpList"] as $key => $value){
                $obj = new DspmIp();
                $obj->deserialize($value);
                array_push($this->SourceIpList, $obj);
            }
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }

        if (array_key_exists("LoginSuccessCount",$param) and $param["LoginSuccessCount"] !== null) {
            $this->LoginSuccessCount = $param["LoginSuccessCount"];
        }

        if (array_key_exists("LoginFailedCount",$param) and $param["LoginFailedCount"] !== null) {
            $this->LoginFailedCount = $param["LoginFailedCount"];
        }
    }
}

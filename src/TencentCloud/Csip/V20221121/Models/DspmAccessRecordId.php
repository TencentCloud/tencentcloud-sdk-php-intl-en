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
 * Dspm access management record Id
 *
 * @method string getSourceIp() Obtain Source IP
 * @method void setSourceIp(string $SourceIp) Set Source IP
 * @method string getAssetId() Obtain Asset list
 * @method void setAssetId(string $AssetId) Set Asset list
 * @method string getRegion() Obtain Region of the asset
 * @method void setRegion(string $Region) Set Region of the asset
 * @method string getAccount() Obtain Asset account
 * @method void setAccount(string $Account) Set Asset account
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method string getRecordTime() Obtain Recording time
 * @method void setRecordTime(string $RecordTime) Set Recording time
 */
class DspmAccessRecordId extends AbstractModel
{
    /**
     * @var string Source IP
     */
    public $SourceIp;

    /**
     * @var string Asset list
     */
    public $AssetId;

    /**
     * @var string Region of the asset
     */
    public $Region;

    /**
     * @var string Asset account
     */
    public $Account;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var string Recording time
     */
    public $RecordTime;

    /**
     * @param string $SourceIp Source IP
     * @param string $AssetId Asset list
     * @param string $Region Region of the asset
     * @param string $Account Asset account
     * @param string $Host Host address
     * @param string $RecordTime Recording time
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
        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }
    }
}

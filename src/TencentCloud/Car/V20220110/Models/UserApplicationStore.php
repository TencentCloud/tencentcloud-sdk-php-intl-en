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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application repository information.
 *
 * @method string getCosBucket() Obtain <p>Cos bucket name</p>
 * @method void setCosBucket(string $CosBucket) Set <p>Cos bucket name</p>
 * @method string getCosRegion() Obtain <p>Cos Bucket Region</p>
 * @method void setCosRegion(string $CosRegion) Set <p>Cos Bucket Region</p>
 * @method string getStoreType() Obtain <p>Repository type. LOG: application logs; ARCHIVE: application archive.</p>
 * @method void setStoreType(string $StoreType) Set <p>Repository type. LOG: application logs; ARCHIVE: application archive.</p>
 * @method string getStoreState() Obtain <p>Repository status. ON: enabled; OFF: disabled.</p>
 * @method void setStoreState(string $StoreState) Set <p>Repository status. ON: enabled; OFF: disabled.</p>
 * @method string getStorePath() Obtain <p>Repository path</p><p>Primary path data. If StoreType is ARCHIVE and SubStorePaths is configured, the system default value will be used.</p>
 * @method void setStorePath(string $StorePath) Set <p>Repository path</p><p>Primary path data. If StoreType is ARCHIVE and SubStorePaths is configured, the system default value will be used.</p>
 * @method array getSubStorePaths() Obtain <p>Subpath list</p><p>Subpath data (multi-path pattern) supports only ARCHIVE StoreType; up to 25 data entries.</p>
 * @method void setSubStorePaths(array $SubStorePaths) Set <p>Subpath list</p><p>Subpath data (multi-path pattern) supports only ARCHIVE StoreType; up to 25 data entries.</p>
 */
class UserApplicationStore extends AbstractModel
{
    /**
     * @var string <p>Cos bucket name</p>
     */
    public $CosBucket;

    /**
     * @var string <p>Cos Bucket Region</p>
     */
    public $CosRegion;

    /**
     * @var string <p>Repository type. LOG: application logs; ARCHIVE: application archive.</p>
     */
    public $StoreType;

    /**
     * @var string <p>Repository status. ON: enabled; OFF: disabled.</p>
     */
    public $StoreState;

    /**
     * @var string <p>Repository path</p><p>Primary path data. If StoreType is ARCHIVE and SubStorePaths is configured, the system default value will be used.</p>
     */
    public $StorePath;

    /**
     * @var array <p>Subpath list</p><p>Subpath data (multi-path pattern) supports only ARCHIVE StoreType; up to 25 data entries.</p>
     */
    public $SubStorePaths;

    /**
     * @param string $CosBucket <p>Cos bucket name</p>
     * @param string $CosRegion <p>Cos Bucket Region</p>
     * @param string $StoreType <p>Repository type. LOG: application logs; ARCHIVE: application archive.</p>
     * @param string $StoreState <p>Repository status. ON: enabled; OFF: disabled.</p>
     * @param string $StorePath <p>Repository path</p><p>Primary path data. If StoreType is ARCHIVE and SubStorePaths is configured, the system default value will be used.</p>
     * @param array $SubStorePaths <p>Subpath list</p><p>Subpath data (multi-path pattern) supports only ARCHIVE StoreType; up to 25 data entries.</p>
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("StoreType",$param) and $param["StoreType"] !== null) {
            $this->StoreType = $param["StoreType"];
        }

        if (array_key_exists("StoreState",$param) and $param["StoreState"] !== null) {
            $this->StoreState = $param["StoreState"];
        }

        if (array_key_exists("StorePath",$param) and $param["StorePath"] !== null) {
            $this->StorePath = $param["StorePath"];
        }

        if (array_key_exists("SubStorePaths",$param) and $param["SubStorePaths"] !== null) {
            $this->SubStorePaths = $param["SubStorePaths"];
        }
    }
}

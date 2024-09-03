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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application repository information.
 *
 * @method string getCosBucket() Obtain COS bucket name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosBucket(string $CosBucket) Set COS bucket name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCosRegion() Obtain COS bucket region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosRegion(string $CosRegion) Set COS bucket region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStoreType() Obtain Repository type. LOG: application logs; ARCHIVE: application archive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoreType(string $StoreType) Set Repository type. LOG: application logs; ARCHIVE: application archive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStoreState() Obtain Repository status. ON: enabled; OFF: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoreState(string $StoreState) Set Repository status. ON: enabled; OFF: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorePath() Obtain Repository path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorePath(string $StorePath) Set Repository path.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserApplicationStore extends AbstractModel
{
    /**
     * @var string COS bucket name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosBucket;

    /**
     * @var string COS bucket region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosRegion;

    /**
     * @var string Repository type. LOG: application logs; ARCHIVE: application archive.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoreType;

    /**
     * @var string Repository status. ON: enabled; OFF: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoreState;

    /**
     * @var string Repository path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorePath;

    /**
     * @param string $CosBucket COS bucket name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CosRegion COS bucket region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StoreType Repository type. LOG: application logs; ARCHIVE: application archive.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StoreState Repository status. ON: enabled; OFF: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorePath Repository path.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}

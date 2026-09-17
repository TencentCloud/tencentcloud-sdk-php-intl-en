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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMediaStorageClass request structure.
 *
 * @method array getFileIds() Obtain 
 * @method void setFileIds(array $FileIds) Set 
 * @method string getStorageClass() Obtain 
 * @method void setStorageClass(string $StorageClass) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getRestoreTier() Obtain 
 * @method void setRestoreTier(string $RestoreTier) Set 
 */
class ModifyMediaStorageClassRequest extends AbstractModel
{
    /**
     * @var array 
     */
    public $FileIds;

    /**
     * @var string 
     */
    public $StorageClass;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $RestoreTier;

    /**
     * @param array $FileIds 
     * @param string $StorageClass 
     * @param integer $SubAppId 
     * @param string $RestoreTier 
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }
    }
}

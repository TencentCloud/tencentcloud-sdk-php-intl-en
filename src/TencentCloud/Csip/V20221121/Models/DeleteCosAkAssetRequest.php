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
 * DeleteCosAkAsset request structure.
 *
 * @method array getCosAkSet() Obtain Collection of cos AKs to delete
 * @method void setCosAkSet(array $CosAkSet) Set Collection of cos AKs to delete
 */
class DeleteCosAkAssetRequest extends AbstractModel
{
    /**
     * @var array Collection of cos AKs to delete
     */
    public $CosAkSet;

    /**
     * @param array $CosAkSet Collection of cos AKs to delete
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
        if (array_key_exists("CosAkSet",$param) and $param["CosAkSet"] !== null) {
            $this->CosAkSet = [];
            foreach ($param["CosAkSet"] as $key => $value){
                $obj = new CosAkSet();
                $obj->deserialize($value);
                array_push($this->CosAkSet, $obj);
            }
        }
    }
}

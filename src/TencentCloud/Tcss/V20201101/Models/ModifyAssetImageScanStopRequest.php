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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAssetImageScanStop request structure.
 *
 * @method string getTaskID() Obtain Task ID
 * @method void setTaskID(string $TaskID) Set Task ID
 * @method array getImages() Obtain Image ID
 * @method void setImages(array $Images) Set Image ID
 * @method array getFilters() Obtain Filter
 * @method void setFilters(array $Filters) Set Filter
 * @method string getExcludeImageIds() Obtain Specified image IDs to be excluded
 * @method void setExcludeImageIds(string $ExcludeImageIds) Set Specified image IDs to be excluded
 */
class ModifyAssetImageScanStopRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskID;

    /**
     * @var array Image ID
     */
    public $Images;

    /**
     * @var array Filter
     */
    public $Filters;

    /**
     * @var string Specified image IDs to be excluded
     */
    public $ExcludeImageIds;

    /**
     * @param string $TaskID Task ID
     * @param array $Images Image ID
     * @param array $Filters Filter
     * @param string $ExcludeImageIds Specified image IDs to be excluded
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageIds",$param) and $param["ExcludeImageIds"] !== null) {
            $this->ExcludeImageIds = $param["ExcludeImageIds"];
        }
    }
}

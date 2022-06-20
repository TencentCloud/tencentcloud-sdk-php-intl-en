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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the media processing output object.
 *
 * @method string getType() Obtain The type of storage location for the media processing output object. Only COS is supported currently.
 * @method void setType(string $Type) Set The type of storage location for the media processing output object. Only COS is supported currently.
 * @method CosOutputStorage getCosOutputStorage() Obtain The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string The type of storage location for the media processing output object. Only COS is supported currently.
     */
    public $Type;

    /**
     * @var CosOutputStorage The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CosOutputStorage;

    /**
     * @param string $Type The type of storage location for the media processing output object. Only COS is supported currently.
     * @param CosOutputStorage $CosOutputStorage The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorage();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }
    }
}

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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on local HDD storage.
 *
 * @method string getType() Obtain Local HDD storage type. Value: LOCAL_PRO.
Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set Local HDD storage type. Value: LOCAL_PRO.
Note: This field may return null, indicating that no valid value is found.
 * @method integer getMinSize() Obtain Minimum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 * @method void setMinSize(integer $MinSize) Set Minimum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 * @method integer getMaxSize() Obtain Maximum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 * @method void setMaxSize(integer $MaxSize) Set Maximum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 */
class StorageBlock extends AbstractModel
{
    /**
     * @var string Local HDD storage type. Value: LOCAL_PRO.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var integer Minimum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
     */
    public $MinSize;

    /**
     * @var integer Maximum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
     */
    public $MaxSize;

    /**
     * @param string $Type Local HDD storage type. Value: LOCAL_PRO.
Note: This field may return null, indicating that no valid value is found.
     * @param integer $MinSize Minimum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
     * @param integer $MaxSize Maximum capacity of local HDD storage
Note: This field may return null, indicating that no valid value is found.
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

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}

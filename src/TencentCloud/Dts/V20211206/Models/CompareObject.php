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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration of the data consistency check object
 *
 * @method string getObjectMode() Obtain Data comparison object mode (`all`: Entire instance; `partial`: Some objects)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectMode(string $ObjectMode) Set Data comparison object mode (`all`: Entire instance; `partial`: Some objects)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getObjectItems() Obtain Object list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectItems(array $ObjectItems) Set Object list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAdvancedObjects() Obtain Advanced object types, such as account, index, shardkey, schema.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdvancedObjects(array $AdvancedObjects) Set Advanced object types, such as account, index, shardkey, schema.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareObject extends AbstractModel
{
    /**
     * @var string Data comparison object mode (`all`: Entire instance; `partial`: Some objects)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectMode;

    /**
     * @var array Object list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectItems;

    /**
     * @var array Advanced object types, such as account, index, shardkey, schema.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdvancedObjects;

    /**
     * @param string $ObjectMode Data comparison object mode (`all`: Entire instance; `partial`: Some objects)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ObjectItems Object list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AdvancedObjects Advanced object types, such as account, index, shardkey, schema.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ObjectMode",$param) and $param["ObjectMode"] !== null) {
            $this->ObjectMode = $param["ObjectMode"];
        }

        if (array_key_exists("ObjectItems",$param) and $param["ObjectItems"] !== null) {
            $this->ObjectItems = [];
            foreach ($param["ObjectItems"] as $key => $value){
                $obj = new CompareObjectItem();
                $obj->deserialize($value);
                array_push($this->ObjectItems, $obj);
            }
        }

        if (array_key_exists("AdvancedObjects",$param) and $param["AdvancedObjects"] !== null) {
            $this->AdvancedObjects = $param["AdvancedObjects"];
        }
    }
}

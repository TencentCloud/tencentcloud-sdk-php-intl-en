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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Conflict resource.
 *
 * @method string getConflictSourceId() Obtain Conflict resource ID
 * @method void setConflictSourceId(string $ConflictSourceId) Set Conflict resource ID
 * @method string getSourceItem() Obtain Conflict resource
 * @method void setSourceItem(string $SourceItem) Set Conflict resource
 * @method array getConflictItemSet() Obtain Conflict resource items
 * @method void setConflictItemSet(array $ConflictItemSet) Set Conflict resource items
 */
class ConflictSource extends AbstractModel
{
    /**
     * @var string Conflict resource ID
     */
    public $ConflictSourceId;

    /**
     * @var string Conflict resource
     */
    public $SourceItem;

    /**
     * @var array Conflict resource items
     */
    public $ConflictItemSet;

    /**
     * @param string $ConflictSourceId Conflict resource ID
     * @param string $SourceItem Conflict resource
     * @param array $ConflictItemSet Conflict resource items
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
        if (array_key_exists("ConflictSourceId",$param) and $param["ConflictSourceId"] !== null) {
            $this->ConflictSourceId = $param["ConflictSourceId"];
        }

        if (array_key_exists("SourceItem",$param) and $param["SourceItem"] !== null) {
            $this->SourceItem = $param["SourceItem"];
        }

        if (array_key_exists("ConflictItemSet",$param) and $param["ConflictItemSet"] !== null) {
            $this->ConflictItemSet = [];
            foreach ($param["ConflictItemSet"] as $key => $value){
                $obj = new ConflictItem();
                $obj->deserialize($value);
                array_push($this->ConflictItemSet, $obj);
            }
        }
    }
}

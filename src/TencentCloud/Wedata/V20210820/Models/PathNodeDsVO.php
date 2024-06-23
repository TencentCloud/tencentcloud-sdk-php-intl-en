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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Development - Unified Tree Structure Return Attributes
 *
 * @method string getId() Obtain PathNode ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set PathNode ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTitle() Obtain PathNode Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTitle(string $Title) Set PathNode Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain PathNode Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set PathNode Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentId() Obtain Unique Identifier of Parent Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentId(string $ParentId) Set Unique Identifier of Parent Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIsLeaf() Obtain Is Leaf Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsLeaf(boolean $IsLeaf) Set Is Leaf Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getChildren() Obtain Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChildren(array $Children) Set Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain Business Parameters, base64 encoded JSON string, to obtain specific parameters, base64 decoding is required
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set Business Parameters, base64 encoded JSON string, to obtain specific parameters, base64 decoding is required
Note: This field may return null, indicating that no valid value can be obtained.
 */
class PathNodeDsVO extends AbstractModel
{
    /**
     * @var string PathNode ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string PathNode Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Title;

    /**
     * @var string PathNode Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Unique Identifier of Parent Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentId;

    /**
     * @var boolean Is Leaf Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsLeaf;

    /**
     * @var array Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Children;

    /**
     * @var string Business Parameters, base64 encoded JSON string, to obtain specific parameters, base64 decoding is required
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @param string $Id PathNode ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Title PathNode Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type PathNode Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentId Unique Identifier of Parent Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IsLeaf Is Leaf Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Children Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params Business Parameters, base64 encoded JSON string, to obtain specific parameters, base64 decoding is required
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new PathNodeDsVO();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}

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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamically generated change details.
 *
 * @method string getName() Obtain Tab page header.
 * @method void setName(string $Name) Set Tab page header.
 * @method integer getCount() Obtain Number of change items.
 * @method void setCount(integer $Count) Set Number of change items.
 * @method array getRows() Obtain Detailed data to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRows(array $Rows) Set Detailed data to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHeader() Obtain Header information to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeader(array $Header) Set Header information to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DiffDetail extends AbstractModel
{
    /**
     * @var string Tab page header.
     */
    public $Name;

    /**
     * @var integer Number of change items.
     */
    public $Count;

    /**
     * @var array Detailed data to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rows;

    /**
     * @var array Header information to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Header;

    /**
     * @param string $Name Tab page header.
     * @param integer $Count Number of change items.
     * @param array $Rows Detailed data to be rendered.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Header Header information to be rendered.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new DiffDetailItem();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new DiffHeader();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
        }
    }
}

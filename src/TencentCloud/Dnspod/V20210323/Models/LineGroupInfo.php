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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a split zone group
 *
 * @method string getLineId() Obtain Split zone group ID
 * @method void setLineId(string $LineId) Set Split zone group ID
 * @method string getName() Obtain Split zone group name
 * @method void setName(string $Name) Set Split zone group name
 * @method string getType() Obtain Group type
 * @method void setType(string $Type) Set Group type
 * @method array getLineList() Obtain List of split zones in the split zone group
 * @method void setLineList(array $LineList) Set List of split zones in the split zone group
 */
class LineGroupInfo extends AbstractModel
{
    /**
     * @var string Split zone group ID
     */
    public $LineId;

    /**
     * @var string Split zone group name
     */
    public $Name;

    /**
     * @var string Group type
     */
    public $Type;

    /**
     * @var array List of split zones in the split zone group
     */
    public $LineList;

    /**
     * @param string $LineId Split zone group ID
     * @param string $Name Split zone group name
     * @param string $Type Group type
     * @param array $LineList List of split zones in the split zone group
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
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LineList",$param) and $param["LineList"] !== null) {
            $this->LineList = $param["LineList"];
        }
    }
}

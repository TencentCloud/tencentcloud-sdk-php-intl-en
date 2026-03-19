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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Department in the shared unit.
 *
 * @method integer getShareNodeId() Obtain <p>Shared department ID.</p>.
 * @method void setShareNodeId(integer $ShareNodeId) Set <p>Shared department ID.</p>.
 * @method string getCreateTime() Obtain <P>Creation time.</p>.
 * @method void setCreateTime(string $CreateTime) Set <P>Creation time.</p>.
 */
class ShareUnitNode extends AbstractModel
{
    /**
     * @var integer <p>Shared department ID.</p>.
     */
    public $ShareNodeId;

    /**
     * @var string <P>Creation time.</p>.
     */
    public $CreateTime;

    /**
     * @param integer $ShareNodeId <p>Shared department ID.</p>.
     * @param string $CreateTime <P>Creation time.</p>.
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
        if (array_key_exists("ShareNodeId",$param) and $param["ShareNodeId"] !== null) {
            $this->ShareNodeId = $param["ShareNodeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

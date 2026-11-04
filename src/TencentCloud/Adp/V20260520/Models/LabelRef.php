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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag reference (for output parameters)
 *
 * @method string getLabelId() Obtain <p>Tag ID.</p>
 * @method void setLabelId(string $LabelId) Set <p>Tag ID.</p>
 * @method string getLabelName() Obtain <p>Tag name.</p>
 * @method void setLabelName(string $LabelName) Set <p>Tag name.</p>
 * @method array getLabelTermIdList() Obtain <p>Tag standard term ID list.</p>
 * @method void setLabelTermIdList(array $LabelTermIdList) Set <p>Tag standard term ID list.</p>
 * @method array getLabelTermList() Obtain <p>Tag standard word list</p>
 * @method void setLabelTermList(array $LabelTermList) Set <p>Tag standard word list</p>
 */
class LabelRef extends AbstractModel
{
    /**
     * @var string <p>Tag ID.</p>
     */
    public $LabelId;

    /**
     * @var string <p>Tag name.</p>
     */
    public $LabelName;

    /**
     * @var array <p>Tag standard term ID list.</p>
     */
    public $LabelTermIdList;

    /**
     * @var array <p>Tag standard word list</p>
     */
    public $LabelTermList;

    /**
     * @param string $LabelId <p>Tag ID.</p>
     * @param string $LabelName <p>Tag name.</p>
     * @param array $LabelTermIdList <p>Tag standard term ID list.</p>
     * @param array $LabelTermList <p>Tag standard word list</p>
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelTermIdList",$param) and $param["LabelTermIdList"] !== null) {
            $this->LabelTermIdList = $param["LabelTermIdList"];
        }

        if (array_key_exists("LabelTermList",$param) and $param["LabelTermList"] !== null) {
            $this->LabelTermList = $param["LabelTermList"];
        }
    }
}

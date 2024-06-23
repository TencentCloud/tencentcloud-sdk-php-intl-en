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
 * Dependency edge information of the task
 *
 * @method string getTaskTo() Obtain Downstream task ID
 * @method void setTaskTo(string $TaskTo) Set Downstream task ID
 * @method string getTaskFrom() Obtain Upstream task ID
 * @method void setTaskFrom(string $TaskFrom) Set Upstream task ID
 * @method string getLinkType() Obtain Dependency Edge Type 1,"real_real" indicates task->task; 2, "virtual_real" crossed workflow task->task
 * @method void setLinkType(string $LinkType) Set Dependency Edge Type 1,"real_real" indicates task->task; 2, "virtual_real" crossed workflow task->task
 * @method string getLinkId() Obtain Dependency Edge ID
 * @method void setLinkId(string $LinkId) Set Dependency Edge ID
 * @method string getLinkStyle() Obtain To distinguish newly added cyclic dependency. Default is normal, for cyclic dependency it is circulate
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLinkStyle(string $LinkStyle) Set To distinguish newly added cyclic dependency. Default is normal, for cyclic dependency it is circulate
Note: This field may return null, indicating that no valid value can be obtained.
 */
class OpsTaskLinkInfoDto extends AbstractModel
{
    /**
     * @var string Downstream task ID
     */
    public $TaskTo;

    /**
     * @var string Upstream task ID
     */
    public $TaskFrom;

    /**
     * @var string Dependency Edge Type 1,"real_real" indicates task->task; 2, "virtual_real" crossed workflow task->task
     */
    public $LinkType;

    /**
     * @var string Dependency Edge ID
     */
    public $LinkId;

    /**
     * @var string To distinguish newly added cyclic dependency. Default is normal, for cyclic dependency it is circulate
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LinkStyle;

    /**
     * @param string $TaskTo Downstream task ID
     * @param string $TaskFrom Upstream task ID
     * @param string $LinkType Dependency Edge Type 1,"real_real" indicates task->task; 2, "virtual_real" crossed workflow task->task
     * @param string $LinkId Dependency Edge ID
     * @param string $LinkStyle To distinguish newly added cyclic dependency. Default is normal, for cyclic dependency it is circulate
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
        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("LinkId",$param) and $param["LinkId"] !== null) {
            $this->LinkId = $param["LinkId"];
        }

        if (array_key_exists("LinkStyle",$param) and $param["LinkStyle"] !== null) {
            $this->LinkStyle = $param["LinkStyle"];
        }
    }
}

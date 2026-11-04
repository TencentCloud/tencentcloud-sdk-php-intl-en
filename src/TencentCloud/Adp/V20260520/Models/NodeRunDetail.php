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
 * Workflow node running details
 *
 * @method NodeRun getNodeRun() Obtain <p>Node running information</p>
 * @method void setNodeRun(NodeRun $NodeRun) Set <p>Node running information</p>
 * @method NodeRunContent getNodeRunContent() Obtain <p>Node operation content.</p>
 * @method void setNodeRunContent(NodeRunContent $NodeRunContent) Set <p>Node operation content.</p>
 * @method NodeRunExecution getNodeRunExecution() Obtain <p>Node operation process</p>
 * @method void setNodeRunExecution(NodeRunExecution $NodeRunExecution) Set <p>Node operation process</p>
 * @method NodeRunLog getNodeRunLog() Obtain <p>Node operation logs</p>
 * @method void setNodeRunLog(NodeRunLog $NodeRunLog) Set <p>Node operation logs</p>
 * @method array getStatisticList() Obtain <p>Statistical information.</p>
 * @method void setStatisticList(array $StatisticList) Set <p>Statistical information.</p>
 */
class NodeRunDetail extends AbstractModel
{
    /**
     * @var NodeRun <p>Node running information</p>
     */
    public $NodeRun;

    /**
     * @var NodeRunContent <p>Node operation content.</p>
     */
    public $NodeRunContent;

    /**
     * @var NodeRunExecution <p>Node operation process</p>
     */
    public $NodeRunExecution;

    /**
     * @var NodeRunLog <p>Node operation logs</p>
     */
    public $NodeRunLog;

    /**
     * @var array <p>Statistical information.</p>
     */
    public $StatisticList;

    /**
     * @param NodeRun $NodeRun <p>Node running information</p>
     * @param NodeRunContent $NodeRunContent <p>Node operation content.</p>
     * @param NodeRunExecution $NodeRunExecution <p>Node operation process</p>
     * @param NodeRunLog $NodeRunLog <p>Node operation logs</p>
     * @param array $StatisticList <p>Statistical information.</p>
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
        if (array_key_exists("NodeRun",$param) and $param["NodeRun"] !== null) {
            $this->NodeRun = new NodeRun();
            $this->NodeRun->deserialize($param["NodeRun"]);
        }

        if (array_key_exists("NodeRunContent",$param) and $param["NodeRunContent"] !== null) {
            $this->NodeRunContent = new NodeRunContent();
            $this->NodeRunContent->deserialize($param["NodeRunContent"]);
        }

        if (array_key_exists("NodeRunExecution",$param) and $param["NodeRunExecution"] !== null) {
            $this->NodeRunExecution = new NodeRunExecution();
            $this->NodeRunExecution->deserialize($param["NodeRunExecution"]);
        }

        if (array_key_exists("NodeRunLog",$param) and $param["NodeRunLog"] !== null) {
            $this->NodeRunLog = new NodeRunLog();
            $this->NodeRunLog->deserialize($param["NodeRunLog"]);
        }

        if (array_key_exists("StatisticList",$param) and $param["StatisticList"] !== null) {
            $this->StatisticList = [];
            foreach ($param["StatisticList"] as $key => $value){
                $obj = new Statistic();
                $obj->deserialize($value);
                array_push($this->StatisticList, $obj);
            }
        }
    }
}

<?php

namespace Com\Youzan\TcpDemo\Marketing\Meetreduce\Service;
use Com\Youzan\Ump\Marketing\Meetreduce\Entity\BriefPreferentialData;
use Com\Youzan\Ump\Marketing\Meetreduce\Entity\OutputMeetReduceDetail;
use Com\Youzan\Ump\Marketing\Meetreduce\Interfaces\MeetReduceService as IMeetReduceService;

/**
 * Created by PhpStorm.
 * User: chuxiaofeng
 * Date: 16/12/22
 * Time: 上午10:32
 */
class MeetReduceService implements IMeetReduceService
{

    /**
    struct OutputMeetReduceDetail {
    1: optional  string id,
    2: i64 ktdId,
    3: required  i32 score,
    4: optional  string strId,
    5: string strKtdId,
    6: required  string strScore,
    7: required  list<BriefPreferentialData> preferentialData,
    8: required  set<BriefPreferentialData> briefPreferentialDataSet,
    9: required  map<string,BriefPreferentialData> briefMap
    }
     */

    /**
     * @param \Com\Youzan\Ump\Marketing\Meetreduce\Entity\BriefPreferentialData $data
     * @param int $kdtId
     * @return \Com\Youzan\Ump\Marketing\Meetreduce\Entity\OutputMeetReduceDetail
     * @throws \Com\Youzan\Ump\Marketing\Common\Exception\ServiceException
     */
    public function getDetailById(\Com\Youzan\Ump\Marketing\Meetreduce\Entity\BriefPreferentialData $data, $kdtId)
    {
        $out = new OutputMeetReduceDetail();
        if ($kdtId === 0) {
            yield null;
        } else if ($kdtId === 2) {
            $out->score = 1;
            $out->strScore = "hello";
            $out->preferentialData = [];
            $out->briefPreferentialDataSet = [];
            $out->briefMap = [];
            yield $out;
        } else {
            yield $out;
        }
    }

    /**
     * @param \Com\Youzan\Ump\Marketing\Meetreduce\Entity\BriefPreferentialData[] $data
     * @param int $kdtId
     * @return \Com\Youzan\Ump\Marketing\Meetreduce\Entity\OutputMeetReduceDetail[]
     * @throws \Com\Youzan\Ump\Marketing\Common\Exception\ServiceException
     */
    public function getListBySet(array $data, $kdtId)
    {
        $out = new OutputMeetReduceDetail();
        if ($kdtId === 0) {
            yield null;
        } else if ($kdtId === 1) {
            //4，list内部Pojo对象default字段设置为null
            //5，list内部Pojo对象optional字段设置为null
            $out->score = 1;
            $out->strScore = "hello";
            $out->preferentialData = [];
            $out->briefPreferentialDataSet = [];
            $out->briefMap = [];
            yield [$out];

        } else if ($kdtId === 2) {
            //6，list内部Pojo对象required字段设置为null
            $out->score = 1;
            $out->strScore = "hello";
//            $out->preferentialData = null;
            $out->briefPreferentialDataSet = [];
            $out->briefMap = [];
            yield [$out];

        } else if ($kdtId === 3) {

            //4，list内部Pojo对象default字段设置为null
            //5，list内部Pojo对象optional字段设置为null
            $brief = new BriefPreferentialData();
            $brief->score = 1;
            $brief->isCoupon = true;

            $out->score = 1;
            $out->strScore = "hello";
            $out->preferentialData = [$brief];
            $out->briefPreferentialDataSet = [$brief];
            $out->briefMap = [$brief];
            yield [$out];

        } else if ($kdtId === 4) {

            //6，list内部Pojo对象required字段设置为null
            $brief = new BriefPreferentialData();

            $out->score = 1;
            $out->strScore = "hello";
            $out->preferentialData = [$brief];
            $out->briefPreferentialDataSet = [$brief];
            $out->briefMap = [$brief];
            yield [$out];

        } else if ($kdtId === 5) {
            //10，list对象 add null
            $brief = new BriefPreferentialData();
            $brief->score = 1;
            $brief->isCoupon = true;

            $out->score = 1;
            $out->strScore = "hello";

            $out->preferentialData = [null, $brief, null];
            $out->briefPreferentialDataSet = [null, null, null];
            $out->briefMap = [null, $brief, null];
            yield [null, $out, null];

        } else {
            yield [$out];
        }
    }

    /**
     * @param array $data
     * @param int $kdtId
     * @return \Com\Youzan\Ump\Marketing\Meetreduce\Entity\BriefPreferentialData[]
     * @throws \Com\Youzan\Ump\Marketing\Common\Exception\ServiceException
     */
    public function getListByMap(array $data, $kdtId)
    {
        // map<string,list<list<MeetReduce.OutputMeetReduceDetail>>>
//        $out = new BriefPreferentialData();
//        $out->score = 1;
//        $out->isCoupon = true;


        $out = new OutputMeetReduceDetail();
        if ($kdtId === 0) {
            yield null;
        } else if ($kdtId === 2) {

            $out->score = 1;
            $out->strScore = "hello";
            $out->preferentialData = [];
            $out->briefPreferentialDataSet = [];
            $out->briefMap = [];
            yield ["out"=>[[$out]]];
        } else {
            yield [$out];
        }
    }
}